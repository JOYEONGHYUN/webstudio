// CSE 190M, Spring 2009
// Section 7: Pet-It (solution)
// original page idea and code by Stefanie Hatcher

var counter = 0;   // currently selected breed
var breeds = [];   // array of all breed names as strings

document.observe("dom:loaded", function() {
    $("dogs").observe("change", getBreeds);
    $("cats").observe("change", getBreeds);
    $("nextblob").observe("click", nextClick);
});

// Part 1: get the list of all breeds of cats/dogs using Ajax
function getBreeds() {
    var url = this.id + ".txt";
    new Ajax.Request(url, {
        method: "get",
        onSuccess: ajaxListBreeds,
        onFailure: ajaxFailure,
        onException: ajaxFailure
    });
}

// Part 1: displays a list of breeds of animal
function ajaxListBreeds(ajax) {
    $("breeds").innerHTML = "";
    breeds = ajax.responseText.strip().split("\n");
    for (var i = 0; i < breeds.length; i++) {
        var li = document.createElement("li");
        li.id = breeds[i];
        li.innerHTML = breeds[i];
        $("breeds").appendChild(li);
    }

    // show the first of the breeds
    displayBreedInfo(0);
}


// Part 2: displays the information about a particular cat/dog breed
function displayBreedInfo(index) {
    // get/display info about the breed
    var url = "breeds/" + convert(breeds[index]) + ".html";
    new Ajax.Updater("show", url, {
        method: "get",
        onException: ajaxFailure,
        onFailure: ajaxFailure
    });

    // show the image for the breed
    $("pet").src = "breeds/" + convert(breeds[index]) + ".jpg";

    // Part 3: set up next breed image
    var nextIndex = (index + 1) % breeds.length;
    $("next").src = "breeds/" + convert(breeds[nextIndex]) + ".jpg";

    // Part 3: highlight the name of the currently shown breed
    var allBreeds = $$("#breeds li");
    for (var i = 0; i < allBreeds.length; i++) {
        allBreeds[i].removeClassName("selected");
    }
    $(breeds[index]).addClassName("selected");
}

// Parts 2/3: converts breed such as "Chow Chow" to string such as "chow_chow"
function convert(breed) {
    return breed.toLowerCase().replace(" ", "_");
}

// Part 3: called when "Next" area is clicked.  Moves to next breed
function nextClick() {
    counter = (counter + 1) % breeds.length;
    displayBreedInfo(counter);
}



// provided Ajax failure code
function ajaxFailure(ajax, exception) {
    alert("Error making Ajax request:" +
        "\n\nServer status:\n" + ajax.status + " " + ajax.statusText +
        "\n\nServer response text:\n" + ajax.responseText);
    if (exception) {
        throw exception;
    }
}
