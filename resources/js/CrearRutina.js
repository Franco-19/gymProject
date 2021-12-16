const MenuButton= document.querySelector(".bars")
const menu= document.querySelector(".Menu__ul")
MenuButton.addEventListener("click",()=>{
	menu.classList.toggle("menu_visible")
})