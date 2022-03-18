document.onclick = function(event){
      if (event.target.className == 'header__burger' ){
        event.target.classList.add('active');
        document.getElementsByClassName("menu")[0].style.setProperty("display", "block", "important");
        document.getElementById("buttonMenu").style.setProperty("display", "block", "important");
        BlurEffectAdd() 
        return;
        } else if(event.target.tagName == 'SPAN' && event.target.parentElement.className=="menu")
        {
            event.target.parentElement.classList.add('active');
            document.getElementsByClassName("menu")[0].style.setProperty("display", "block", "important");
            document.getElementById("buttonMenu").style.setProperty("display", "block", "important");
            BlurEffectAdd() 
            return;
        }
        if(event.target.className == 'header__button btn btn-primary greenLight' &&  event.target.parentElement.className=="menu" )
        {
            BlurEffectClear() 
        }
        if (event.target.className == 'header__burger active')
        {
            event.target.classList.remove('active');
            document.getElementById("buttonMenu").style.setProperty("display", "none", "important");
            document.getElementsByClassName("menu")[0].style.display="none"
            BlurEffectClear() 
        }
    }

function BlurEffectAdd() 
{
    document.getElementsByTagName("footer")[0].classList.add('blur');
    document.getElementsByClassName("container-fluid")[0].classList.add('blur');
}

function BlurEffectClear() 
{
    document.getElementsByTagName("footer")[0].classList.remove('blur');
    document.getElementsByClassName("container-fluid")[0].classList.remove('blur');
}