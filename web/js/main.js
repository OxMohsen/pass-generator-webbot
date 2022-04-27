Telegram.WebApp.MainButton.showProgress(true);
Telegram.WebApp.ready();
const initData = Telegram.WebApp.initData || "";
const initDataUnsafe = Telegram.WebApp.initDataUnsafe || {};

if (!Telegram.WebApp.isExpanded) {
  Telegram.WebApp.expand();
}

Telegram.WebApp.MainButton.hideProgress();
Telegram.WebApp.MainButton.setText('BACK TO BOT').show().onClick(Telegram.WebApp.close);

const sliderProps = {fill: "var(--tg-theme-button-color, #0B1EDF)", background: "rgba(255, 255, 255, 0.214)"};
const slider = document.querySelector(".range__slider");
const sliderValue = document.querySelector(".length__title");
const randomFunc = {lower: getRandomLower, upper: getRandomUpper, number: getRandomNumber, symbol: getRandomSymbol};
const resultEl = document.getElementById("result");
const lengthEl = document.getElementById("slider");
const uppercaseEl = document.getElementById("uppercase");
const lowercaseEl = document.getElementById("lowercase");
const numberEl = document.getElementById("number");
const symbolEl = document.getElementById("symbol");
const generateBtn = document.getElementById("generate");
const copyBtn = document.getElementById("copy-btn");
const resultContainer = document.querySelector(".result");
const copyInfo = document.querySelector(".result__info.right");
const copiedInfo = document.querySelector(".result__info.left");
let generatedPassword = false;
let resultContainerBound = {left: resultContainer.getBoundingClientRect().left, top: resultContainer.getBoundingClientRect().top};

function applyFill(slider) {
  const percentage = (100 * (slider.value - slider.min)) / (slider.max - slider.min);
  const bg = `linear-gradient(90deg, ${sliderProps.fill} ${percentage}%, ${sliderProps.background} ${percentage + 0.1}%)`;
  slider.style.background = bg;
  sliderValue.setAttribute("data-length", slider.value);
}

function secureMathRandom() {
  return window.crypto.getRandomValues(new Uint32Array(1))[0] / (Math.pow(2, 32) - 1);
}

function getRandomLower() {
  return String.fromCharCode(Math.floor(Math.random() * 26) + 97);
}

function getRandomUpper() {
  return String.fromCharCode(Math.floor(Math.random() * 26) + 65);
}

function getRandomNumber() {
  return String.fromCharCode(Math.floor(secureMathRandom() * 10) + 48);
}

function getRandomSymbol() {
  const symbols = '~!@#$%^&*()_+{}":?><;.,';
  return symbols[Math.floor(Math.random() * symbols.length)];
}

function generatePassword(length, lower, upper, number, symbol) {
  let generatedPassword = "";
  const typesCount = lower + upper + number + symbol;
  const typesArr = [{ lower }, { upper }, { number }, { symbol }].filter(item => Object.values(item)[0]);
  if (typesCount === 0) {
    return "";
  }
  for (let i = 0; i < length; i++) {
    typesArr.forEach(type => {
      const funcName = Object.keys(type)[0];
      generatedPassword += randomFunc[funcName]();
    });
  }
  return generatedPassword.slice(0, length);
}

function disableOnlyCheckbox() {
  let totalChecked = [uppercaseEl, lowercaseEl, numberEl, symbolEl].filter(el => el.checked)
  totalChecked.forEach(el => {
    if (totalChecked.length == 1) {
      el.disabled = true;
    } else {
      el.disabled = false;
    }
  })
}

applyFill(slider.querySelector("input"));

[uppercaseEl, lowercaseEl, numberEl, symbolEl].forEach(el => {
  el.addEventListener('click', () => {
    disableOnlyCheckbox()
  })
})

slider.querySelector("input").addEventListener("input", event => {
  sliderValue.setAttribute("data-length", event.target.value);
  applyFill(event.target);
});

resultContainer.addEventListener("mousemove", e => {
  resultContainerBound = {
    left: resultContainer.getBoundingClientRect().left,
    top: resultContainer.getBoundingClientRect().top,
  };
  if (generatedPassword) {
    copyBtn.style.opacity = '1';
    copyBtn.style.pointerEvents = 'all';
    copyBtn.style.setProperty("--x", `${e.x - resultContainerBound.left}px`);
    copyBtn.style.setProperty("--y", `${e.y - resultContainerBound.top}px`);
  } else {
    copyBtn.style.opacity = '0';
    copyBtn.style.pointerEvents = 'none';
  }
});

window.addEventListener("resize", e => {
  resultContainerBound = {
    left: resultContainer.getBoundingClientRect().left,
    top: resultContainer.getBoundingClientRect().top,
  };
});

copyBtn.addEventListener("click", () => {
  const textarea = document.createElement("textarea");
  const password = resultEl.innerText;
  if (!password || password == "CLICK GENERATE") {
    return;
  }
  textarea.value = password;
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand("copy");
  textarea.remove();
  copyInfo.style.transform = "translateY(200%)";
  copyInfo.style.opacity = "0";
  copiedInfo.style.transform = "translateY(0%)";
  copiedInfo.style.opacity = "0.75";
});

generateBtn.addEventListener("click", () => {
  const length = +lengthEl.value;
  const hasLower = lowercaseEl.checked;
  const hasUpper = uppercaseEl.checked;
  const hasNumber = numberEl.checked;
  const hasSymbol = symbolEl.checked;
  generatedPassword = true;
  resultEl.innerText = generatePassword(length, hasLower, hasUpper, hasNumber, hasSymbol);
  Telegram.WebApp.MainButton.setText('Send Pass To Telegram').show();
  copyInfo.style.transform = "translateY(0%)";
  copyInfo.style.opacity = "0.75";
  copiedInfo.style.transform = "translateY(200%)";
  copiedInfo.style.opacity = "0";
});

Telegram.WebApp.onEvent('mainButtonClicked', function () {
  const password = resultEl.innerText;
  if (password != "CLICK GENERATE" || !password) {
    Telegram.WebApp.sendData(password);
  }
  Telegram.WebApp.close();
});
