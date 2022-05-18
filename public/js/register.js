/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/register.js ***!
  \**********************************/
var fileTypes = ["image/gif", "image/png", "image/jpeg"];
var avatar = document.getElementById('image');

function validFileType(file) {
  return fileTypes.includes(file.type);
}

function updateImageInPreview(event) {
  var fileList = event.target.files;
  var imgPreview = event.target.previousElementSibling;
  var descriptionWithoutImage = imgPreview.previousElementSibling;
  if (!fileList.length) return;
  var file = fileList[0];
  var isValidFile = validFileType(file);

  if (!isValidFile) {
    alert('Adicione um arquivo válido');
  }

  imgPreview.setAttribute('src', URL.createObjectURL(file));
  descriptionWithoutImage.classList.add('hidden');
  descriptionWithoutImage.classList.remove('absolute');
  imgPreview.classList.add('absolute');
  imgPreview.classList.remove('hidden');
}

avatar.addEventListener('change', updateImageInPreview);
/******/ })()
;