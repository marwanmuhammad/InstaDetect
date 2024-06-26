// document.addEventListener('DOMContentLoaded', function() {
//   document.getElementById('submitStory').addEventListener('click', function(event) {
//     event.preventDefault();

//     // collect data
//     const storyTitle = document.getElementById('storyTitle').value;
//     const storyText = document.getElementById('storyText').value;
//     const imageFile = document.getElementById('imageInput').files[0]; // Get the uploaded image file

   
//     const reader = new FileReader();
//     reader.onload = function(e) {
//       const imageDataUrl = e.target.result;

//       // Store data
//       const storyData = {
//         storyTitle: storyTitle,
//         storyText: storyText,
//         imageDataUrl: imageDataUrl 
//       };

//       localStorage.setItem('userStory', JSON.stringify(storyData));
//       document.getElementById('storyForm').reset();
//     };
//     reader.readAsDataURL(imageFile); 
//   });
// });

// document.addEventListener('DOMContentLoaded', function() {
//   // display data
//   const userStoryData = JSON.parse(localStorage.getItem('userStory'));

//   if (userStoryData) {
//     const cardContainer = document.getElementById('cardContainer');
//     const card = document.createElement('div');
//     card.classList.add('col');
//     card.innerHTML = `
//     <div class="card h-100">
//     <img src="${userStoryData.imageDataUrl}">
//     <div class="card-body">
//       <h5 class="card-title">${userStoryData.storyTitle}</h5>
//       <p class="card-text">${userStoryData.storyText}</p>
//     </div>
//     <button type="button" class="button type1"><a class="reg" href="/Web project/Registration.php"><span class="btn-txt">Read More</span></a>
//   </div>
//     `;
//     cardContainer.appendChild(card);
//   }
// });



// Function to open popup box
function openPopup(title, text, imgSrc) {
  document.querySelector('.popup-title').innerText = title;
  document.querySelector('.popup-text').innerText = text;
  document.querySelector('.popup-img').src = imgSrc;
  document.querySelector('.popup-box').style.display = 'block';
  document.querySelector('.communtity-form-bg').style.display = 'block';
  document.body.style.overflow = 'hidden'; // Disable scrolling
  
  // Hide card-text and show card-text-full
  document.querySelectorAll('.card-text').forEach(element => {
    element.style.display = 'none';
  });
  document.querySelectorAll('.card-text-full').forEach(element => {
    element.style.display = 'block';
  });
}

// Function to close popup box
function closePopup() {
  document.querySelector('.popup-box').style.display = 'none';
  document.querySelector('.communtity-form-bg').style.display = 'none';
  document.body.style.overflow = 'auto'; // Enable scrolling
  
  // Show card-text and hide card-text-full
  document.querySelectorAll('.card-text').forEach(element => {
    element.style.display = 'block';
    element.classList.add("shadow")
  });
  document.querySelectorAll('.card-text-full').forEach(element => {
    element.style.display = 'none';
  });
}

// Attach click event listeners to Read More buttons
document.querySelectorAll('.button.type1.read-more').forEach(button => {
  button.addEventListener('click', () => {
    const card = button.closest('.card');
    const title = card.querySelector('.card-title').innerText;
    const text = card.querySelector('.card-text-full').innerText; // Read full text
    const imgSrc = card.querySelector('img').src;
    openPopup(title, text, imgSrc);
  });
});
