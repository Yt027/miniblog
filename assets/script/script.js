// Managing post content editor's reactions
const postContentEditor = document.getElementById("content-editor");
const postContent = document.getElementById("content");

// Add focus class when the editor is focused
postContentEditor.addEventListener('focusin', () => {
    postContentEditor.classList.add("focus")
})

// Remove focus class when the editor loses focus and is empty
postContentEditor.addEventListener('focusout', () => {
    if(postContentEditor.innerHTML == "<br>" || postContentEditor.innerHTML == "") postContentEditor.classList.remove("focus");
})

// Update the hidden textarea with the content of the editor
postContentEditor.addEventListener('input', () => {
    postContent.value = postContentEditor.innerHTML;
    console.log(postContent.value);
})

// Managing tools actions
const tools = document.querySelectorAll('.tools .btn');

// Add event listeners to each tool button
tools.forEach(tool => {
    tool.addEventListener('click', (event) => {
        var command = tool.dataset['element'];

        // Handle special commands like creating links or inserting images
        if(command == "createLink" || command == "insertImage"){
            var url = prompt('Enter the link', 'http://')
            document.execCommand(command, false, url)
        }
        else{
            document.execCommand(command, false, null)
        }

    })
})