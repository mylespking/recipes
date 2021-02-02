
// Function to run to fill the modal with recipe information
$('.recipeButton').on("click", function () {
    // Empty the Modal Title and then replace with the title of the recipe user selects
  $('#modalTitle').empty().append(this.title);
  fillModalContent(this.title);

});

// Function to fill modal with the recipe details in the main content section
function fillModalContent(recipe) {
    // switch statement which reads the tile of the recipe clicked and fills the modal with the recipe
    switch(recipe) {
        case('Pulled Pork Tacos'):
            $('#modalContent').empty().append('<p> pulled pork recipe </p>');
        break;
        case('Triple Chocolate Cookies'):
            $('#modalContent').empty().append('<p> cookie recipe </p>');
        break;
        default:
            $('#modalContent').empty().append('<p> I\'m sorry we are having trouble finding this recipe! </p>');
    }

};