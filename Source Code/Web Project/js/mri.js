let inputFile = document.getElementById("input-file");
let submitButton = document.querySelector(".submit-button");
let profilePic = document.getElementById("profile-pic");

inputFile.addEventListener('change', function() {
    if (inputFile.files && inputFile.files[0]) {
        let reader = new FileReader();

        reader.onload = function(e) {
            profilePic.setAttribute('src', e.target.result);
            submitButton.style.display = "block";
            submitButton.style.fontSize = "15px";
            submitButton.style.padding = "7px 5px";
            submitButton.style.width = "150px";
            submitButton.style.margin = "20px auto 0";
            submitButton.style.backgroundColor = 'transparent'; 
            submitButton.style.borderRadius = "30px";
        }

        reader.readAsDataURL(inputFile.files[0]);
    }
});

document.querySelector('.mri-center-card').addEventListener('submit', function(event) {
    event.preventDefault(); 
    submitImage(); 
});

function submitImage() {
    const file = inputFile.files[0];
    const resultContainer = document.getElementById('result');

    if (!file) {
        alert("No image selected!");
        return;
    }

    submitButton.disabled = true;

    resultContainer.innerHTML = '<img src="images/loading.gif" alt="Loading...">';

    const formData = new FormData();
    formData.append("my_image", file); 

    fetch("upload.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            resultContainer.innerText = data.predicted_class; 
        } else if (data.error) {
            resultContainer.innerText = data.error; 
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("An error occurred while processing the image.");
    })
    .finally(() => {
        submitButton.disabled = false;
    });
}

function back() {
    history.back();
}
