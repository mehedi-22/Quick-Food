<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin page</title>

    <!-- font awesome cdn link  
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    /> -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="admin-product-form-container">
        <form>
          <h3>add a new Food</h3>
          <input
            type="text"
            placeholder="enter product name"
            name="foodName"
            class="box"
          />
          <input
            type="number"
            placeholder="enter product ID"
            name="foodID"
            class="box"
          />
          <input
            type="file"
            accept="image/png, image/jpeg, image/jpg"
            name="FoodImage"
            class="box"
          />
          <input
            type="text"
            placeholder="enter food details"
            name="details"
            class="box"
          />
          <input
            type="text"
            placeholder="enter availablity"
            name="availability"
            class="box"
          />
          <input
            type="number"
            placeholder="enter price"
            name="price"
            class="box"
          />
          <input
            type="text"
            placeholder="enter quantity"
            name="quantity"
            class="box"
          />
          <input
            type="submit"
            class="btn"
            name="add_product"
            value="add product"
          />
        </form>
      </div>

      <div class="product-display">
        <table class="product-display-table">
          <thead>
            <tr>
              <th>product image</th>
              <th>Food ID</th>
              <th>Food name</th>
              <th>Deatils</th>
              <th>Availabiliy </th>
              <th>Quantity</th>
              <th>product price</th>
              <th>action</th>
            </tr>
          </thead>

          <tr>
            <td>
              <img src="" height="100" alt="" />
            </td>
            <td>Burger</td>
            <td>price/-</td>
            <td>1233</td>
            <td>1233</td>
            <td>1233</td>
            <td>1233</td>
          
            <td>
              <a href="#" class="btn"> <i class="fas fa-edit"></i> edit </a>
              <a href="#" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
