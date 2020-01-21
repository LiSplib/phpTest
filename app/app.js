const $main = document.querySelector('main');
const $form = document.querySelector('form');
const $username = document.querySelector('input[name="username"]');
const $password = document.querySelector('input[name="password"]');

$form.addEventListener('submit', (evt) => {
  evt.preventDefault();
  // Récupérer les valeurs du formulaire
  const data = {
    username: $username.value,
    password: $password.value
  };

  // Envoi de la requete de connexion au serveur
  fetch('http://localhost/testphp/api/login.php', {
      method: "POST",
      body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(data => {
      // Lecture de la réponse
      if(data && data.success){
        fetch('http://localhost/testphp/api/posts.php')
          .then(res => res.json())
          .then(dataPost => updateView(dataPost));
        
      }else{
        // Mauvais login
        alert("C'est pas ça, reessaye");
        $username.value = ""
        $password.value = ""
      }
    })
    function updateView(dataPost){
      $main.innerHTML = `
        <p id="user">Bienvenue <span style="color: blue";>${data.username}</span></p>
        <p id="posts">Voici la liste des posts :</p>
        <ul>
          <li style="margin-right: 30px;"><a href="" style="text-decoration: none;" type="submit">Post n°1</a></li>
          <li style="margin-right: 30px;"><a href="" style="text-decoration: none;" type="submit">Post n°2</a></li>
          <li style="margin-right: 30px;"><a href="" style="text-decoration: none;" type="submit">Post n°3</a></li>
          </ul>
          `; 
      }    
  })

  document.querySelector('')
        // ${
        //   dataPost.map((post, idx) =>
        //   `
        //   <li>
        //     <h3 class="title">${post.title}</h3>
        //     <h3 class="body">${post.body}</h3>
        //   </li>
        //   `).join('')
        // }
