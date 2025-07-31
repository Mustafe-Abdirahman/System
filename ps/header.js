function updateTitle(newTitle) {
    document.title = newTitle;
}

// Example: Get the current file name and update the title (excluding the extension)
const currentFileName = "POS - "+ window.location.pathname.split('/').pop().replace(/\.php$/, '');
updateTitle(currentFileName);
