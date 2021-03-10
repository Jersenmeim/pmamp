const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

function lastModified() {
<<<<<<< HEAD
  var modiDate = new Date(document.lastModified);
  var showAs = modiDate.getDate() + " " + monthNames[modiDate.getMonth()] + ", " + modiDate.getFullYear();
  return showAs
=======
    var modiDate = new Date(document.lastModified);
    var showAs = modiDate.getDate() + " " + monthNames[modiDate.getMonth()] + ", " + modiDate.getFullYear();
    return showAs
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
}



<<<<<<< HEAD
document.getElementById("lastMod").innerHTML = ("Last Updated: " + lastModified());


let x = document.getElementById("click");
let li = document.querySelectorAll(".link");
let ul = document.getElementById("ul");

x.addEventListener('click', showlist);

function showlist() {

  // console.log();

  for (var i = 0; i < li.length; i++) {

    li[i].classList.toggle("newClassName");

  }



}
=======
document.getElementById("lastMod").innerHTML = ( "Last Updated: " + lastModified());
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
