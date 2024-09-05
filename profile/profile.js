const selectUserImage = document.querySelector('.select-user-image');
const selectUserPersonIdImage = document.querySelector('.select-userpersonid-image');
const selectUserCertificateImage = document.querySelector('.select-usercertificate-image');
const inputUserImage = document.querySelector('#userimage');
const inputUserPersonIdImage = document.querySelector('#userpersonidimage');
const inputUserCertificateImage = document.querySelector('#usercertificateimage');
const imgAreaUser = document.querySelector('#userimage-area');
const imgAreaPersonId = document.querySelector('#userpersonidimage-area');
const imgAreaCertificate = document.querySelector('#usercertificateimage-area');

selectUserImage.addEventListener('click', function () {
	inputUserImage.click();
})
selectUserPersonIdImage.addEventListener('click', function () {
	inputUserPersonIdImage.click();
})
selectUserCertificateImage.addEventListener('click', function () {
	inputUserCertificateImage.click();
})

function handleImageUpload(inputElement, imgArea) {
    const image = inputElement.files[0];
    if(image.size < 2000000) {
        const reader = new FileReader();
        reader.onload = () => {
            imgArea.innerHTML = ''; // Clear the previous image
            const imgUrl = reader.result;
            const img = document.createElement('img');
            img.src = imgUrl;
            imgArea.appendChild(img);
            imgArea.classList.add('active');
            imgArea.dataset.img = image.name;
        };
        reader.readAsDataURL(image);
    } else {
        alert("Image size more than 2MB");
    }
}
inputUserImage.addEventListener('change', function () {
    handleImageUpload(this, imgAreaUser);
});

inputUserPersonIdImage.addEventListener('change', function () {
    handleImageUpload(this, imgAreaPersonId);
});

inputUserCertificateImage.addEventListener('change', function () {
    handleImageUpload(this, imgAreaCertificate);
});