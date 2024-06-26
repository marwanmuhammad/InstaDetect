document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function() {
            const parentCard = button.closest(".mri-h-card");
            const imgElement = parentCard.querySelector("img");
            const filename = imgElement.src.split('/').pop();

            if (confirm("Are you sure you want to delete this image?")) {
                fetch('upload.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ delete: true, filename: filename })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        parentCard.remove();
                        location.reload();
                    } else {
                        alert("Error deleting the image: " + data.error);
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });
});
