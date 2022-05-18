const fileTypes = [
    "image/gif",
    "image/png",
    "image/jpeg"
];

const avatar = document.getElementById('image');

function validFileType(file){
    return fileTypes.includes(file.type);
}

function updateImageInPreview(event) {
    const fileList = event.target.files;
    const imgPreview = event.target.previousElementSibling;
    const descriptionWithoutImage = imgPreview.previousElementSibling;

    if(!fileList.length) return;

    const file = fileList[0];

    const isValidFile = validFileType(file);

    if(!isValidFile){
        alert('Adicione um arquivo válido');
    }

    imgPreview.setAttribute('src', URL.createObjectURL(file));

    descriptionWithoutImage.classList.add('hidden');
    descriptionWithoutImage.classList.remove('absolute');

    imgPreview.classList.add('absolute');
    imgPreview.classList.remove('hidden');

}

avatar.addEventListener('change', updateImageInPreview);
