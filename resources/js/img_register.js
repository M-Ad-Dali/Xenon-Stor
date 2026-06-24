function previewImage(event) {
        const reader = new FileReader();
        const imagePreview = document.getElementById('image-preview');
        const placeholderIcon = document.getElementById('placeholder-icon');
        
        reader.onload = function() {
            imagePreview.src = reader.result;
            imagePreview.classList.remove('hidden');
            placeholderIcon.classList.add('hidden');
        }
        
        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }