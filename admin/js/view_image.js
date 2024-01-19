function previewImage() {
    var input = document.getElementById('idFile');
    var preview = document.getElementById('image-preview');
    var uploadP = document.getElementById('image-upload');
    var imageCon = document.getElementById('image-preview-container');
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.width="570px";
            preview.style.height="340px";
            imageCon.style.borderStyle="none";
        };

        reader.readAsDataURL(input.files[0]);
        document.getElementById('file-name-display').innerText = input.files[0].name;
        uploadP.style.display="none";
        preview.style.display="block";

    } else {
        // If no file is selected, reset the preview and display default text
        preview.style.display="none";
        imageCon.style.borderStyle="dashed";
        document.getElementById('file-name-display').innerText = 'Upload File';
        uploadP.style.display="block";
    }
}
