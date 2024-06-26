
  document.addEventListener('DOMContentLoaded', function() {
      let valueDisplays = document.querySelectorAll(".counter");
      let totalDuration = 200;
      valueDisplays.forEach((valueDisplay) => {
          let startValue = 0;
          let endValue = parseFloat(valueDisplay.getAttribute("data-val"));
          let increment = endValue / totalDuration; 
          let counter = setInterval(function(){
              startValue += increment;
              if (startValue >= endValue) {
                  startValue = endValue;
                  clearInterval(counter);
              }
              valueDisplay.textContent =  startValue.toFixed(1) + "%"; 
          }, 1); 
      });
  });