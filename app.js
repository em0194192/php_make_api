//line 2 is script tag to add to index to enable the axios library for api calls
// <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
//API CALL to my bookapi - takes the json response
axios
  .get("https://ozarktechwebdev.com/dontduplicate/bookapi.php?id=1") // Adjust the URL as necessary
  .then(function (response) {
    const books = response.data; //save the response data to a variable
    console.log(books); //console log the response data containing variable
    let list = document.createElement("ul"); //create a UL element, store in a variable called list
    books.forEach((book) => { //foreach the response data
      let listItem = document.createElement("li");
      listItem.textContent = `${book.bookName} $ ${book.bookPrice}`;
      list.appendChild(listItem);
    });
    document.getElementById("books").appendChild(list);
  })
  .catch(function (error) {
    console.log(error);
  });
