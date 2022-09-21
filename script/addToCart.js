

const addToCart = ()=>{
    pushDataToCart()
    grabCartButtons = Array.from(document.getElementsByClassName('cartButton'))
    grabCartButtons.map((key)=>{
        const foodId = `id= ${key.getAttribute("data-id")}`
        key.addEventListener('click',()=>{
            pushDataToCart(foodId) 
        })    
        return 1
    })

}


const pushDataToCart=async(foodId=null)=>{
    cartElement = document.getElementById("grabCart")
    const response = await fetch(`http://localhost/src/cartJson.php?${foodId}`);
    data =  await response.json();
    cartElement.innerHTML = `${data.nProductInCart}`
}

// const fetchData=async()=>{
//     const response = await fetch('http://localhost/src/cartJson.php');
//     return await response.json();
// }

addToCart()