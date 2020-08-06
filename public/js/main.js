function toggleModal(elementId) {
    if (typeof elementId === "string") elementId = [elementId];

    elementId.forEach(id => {
        return document.getElementById(id).style.display === "none"
            ? (document.getElementById(id).style.display = "block")
            : (document.getElementById(id).style.display = "none");
    });
}

function uploadImage(element) {
    readURL(element);
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            var image = document.createElement("img");
            image.setAttribute("src", e.target.result);
            document.getElementById('body-custom-textarea').appendChild(image);
        };

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}


function processBugPost(){
    var blob_string = document.getElementById('body-custom-textarea').innerHTML
    document.getElementById('body').value = blob_string;
    // add-new-bug-form
    setTimeout(() => {
        document.getElementById('add-new-bug-form').submit();
    }, 900);
}
