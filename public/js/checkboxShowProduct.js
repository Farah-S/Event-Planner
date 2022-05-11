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

//---------------------tables----------------------
const tablescheckbox = document.getElementById('table');
const elseradio = document.getElementById('else');

const tablesOptions = document.getElementById('tablesOptions');
const elseTextbox = document.getElementById('elseTextbox');

tablescheckbox.addEventListener('click', function handleClick() {
  if (tablescheckbox.checked) {
    tablesOptions.style.display = 'block';
    if(elseradio.checked){
      elseTextbox.style.display = 'block';
    }
    else{
      elseTextbox.style.display = 'none';
    }
  } else {
    tablesOptions.style.display = 'none';
  }
});

elseradio.addEventListener('click', function handleClick(){
      if(elseradio.checked){
        elseTextbox.style.display = 'block';
      }
      else{
        elseTextbox.style.display = 'none';
      }
});

if (tablescheckbox.checked) {
  tablesOptions.style.display = 'block';
} else {
  tablesOptions.style.display = 'none';
}
if(elseradio.checked){
  elseTextbox.style.display = 'block';
}
else{
  elseTextbox.style.display = 'none';
}

//---------------------centerpiece----------------------
const centerpiececheckbox = document.getElementById('cp');

const centerpieceOptions = document.getElementById('centerpieceOptions');

centerpiececheckbox.addEventListener('click', function handleClick() {
  if (centerpiececheckbox.checked) {
    centerpieceOptions.style.display = 'block';
  } else {
    centerpieceOptions.style.display = 'none';
  }
});
if (centerpiececheckbox.checked) {
  centerpieceOptions.style.display = 'block';
} else {
  centerpieceOptions.style.display = 'none';
}

//---------------------decoration----------------------
const decorationcheckbox = document.getElementById('decorations');

const decorationOptions = document.getElementById('decorationOptions');

decorationcheckbox.addEventListener('click', function handleClick() {
  if (decorationcheckbox.checked) {
    decorationOptions.style.display = 'block';
  } else {
    decorationOptions.style.display = 'none';
  }
});
if (decorationcheckbox.checked) {
  decorationOptions.style.display = 'block';
} else {
  decorationOptions.style.display = 'none';
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

//---------------------marketing----------------------
const marketingcheckbox = document.getElementById('market');

const marketingOptions = document.getElementById('marketingOptions');

marketingcheckbox.addEventListener('click', function handleClick() {
  if (marketingcheckbox.checked) {
    marketingOptions.style.display = 'block';
  } else {
    marketingOptions.style.display = 'none';
  }
});
if (marketingcheckbox.checked) {
  marketingOptions.style.display = 'block';
} else {
  marketingOptions.style.display = 'none';
}

