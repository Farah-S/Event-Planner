//---------------------Stage----------------------
const stagecheckbox = document.getElementById('stage');

const stageOptions = document.getElementById('stageOptions');

stagecheckbox.addEventListener('click', function handleClick() {
  if (stagecheckbox.checked) {
    stageOptions.style.display = 'block';
  } else {
    stageOptions.style.display = 'none';
  }
});
if (stagecheckbox.checked) {
  stageOptions.style.display = 'block';
} else {
  stageOptions.style.display = 'none';
}


//---------------------LED screens----------------------
const LEDcheckbox = document.getElementById('ledScreen');

const LEDOptions = document.getElementById('ledOptions');

LEDcheckbox.addEventListener('click', function handleClick() {
  if (LEDcheckbox.checked) {
    LEDOptions.style.display = 'block';
  } else {
    LEDOptions.style.display = 'none';
  }
});
if (LEDcheckbox.checked) {
  LEDOptions.style.display = 'block';
} else {
  LEDOptions.style.display = 'none';
}