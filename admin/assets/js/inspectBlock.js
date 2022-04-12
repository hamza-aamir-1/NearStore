document.addEventListener('contextmenu', event => event.preventDefault());

document.onkeydown = function(e)
{
    // disable F12 key
    if(e.keyCode == 123)
    {
        return false;
    }

    // Disable ctrl + c keys
    if(e.ctrlKey && e.keyCode == 67)
    {
        return false;
    }

    // Disable ctrl + U keys
    if(e.ctrlKey && e.keyCode == 85)
    {
        return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == "U".charCodeAt(0))
    {
        return false;
    }
    
    if(e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0))
    {
        return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0))
    {
        return false;
    }

}