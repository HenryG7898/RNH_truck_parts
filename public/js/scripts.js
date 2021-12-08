let listItems = document.querySelectorAll(".dd");
let dropDownMenu = document.querySelectorAll(".sidenav .dropdown")
let topNav = document.querySelector(".nav_dropdown a ");

topNav.addEventListener("click", (event)=>{
    document.querySelector(".nav_dropdown .dropdown").classList.toggle("active")
})
console.log(listItems);

listItems.forEach((itemLink, index)=>{
    console.log(itemLink)
    itemLink.addEventListener("click", (event)=>{
        dropDownMenu[index].classList.toggle("active");

    })

})


