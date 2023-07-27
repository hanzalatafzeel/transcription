
       
       
       
       const mediaFileInput = document.getElementById('mediaFile');
        const mediaInfoDiv = document.getElementById('mediaInfo');

        mediaFileInput.addEventListener('change', handleMediaUpload);

        function handleMediaUpload() {
            const file = mediaFileInput.files[0];
            if (file) {
                displayMediaInfo(file);
            }
        }

        function displayMediaInfo(file) {
            const mediaType = file.type.startsWith('audio') ? 'Audio' : 'Video';
            const mediaDuration = (file.duration || 'N/A');
            mediaInfoDiv.innerHTML = `<p>${mediaType} duration: ${mediaDuration}</p>`;
        }

        // The JavaScript code will handle the media file upload and display the duration of the uploaded media.
// It will use the HTML5 FileReader API to read the media file and extract the duration.

function handleMediaUpload() {
    const file = mediaFileInput.files[0];
    if (file) {
        displayMediaInfo(file);
    }
}

function displayMediaInfo(file) {
    const mediaType = file.type.startsWith('audio') ? 'Audio' : 'Video';

    // Use the HTML5 FileReader API to read the media file
    const reader = new FileReader();
    reader.onload = function (event) {
        const mediaElement = document.createElement(mediaType.toLowerCase());
        mediaElement.src = event.target.result;
        mediaElement.addEventListener('loadedmetadata', function () {
            const mediaDuration = mediaElement.duration.toFixed(2); // Duration in seconds
            mediaInfoDiv.innerHTML = `<p>${mediaType} duration: ${mediaDuration} seconds</p>`;
        });
    };
    reader.readAsDataURL(file);
}