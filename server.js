const express = require("express");
const mysql = require("mysql");
const myConnection = require("express-myconnection");
const connection = require("express-myconnection");
const app = express();

//parametre de la base de donnees
const db = {
  host: "localhost",
  user: "root",
  passeword: "",
  port: 3306,
  database: "hook_sarl",
};

//connection avec la base de donnees
app.use(myConnection(mysql, db, "pool"));

//recupere les contenu des input du formulaire
app.use(express.urlencoded({ extended: false }));

//utiliser  le moteur des template ejs
app.set("view engine", "ejs");
app.set("views");

//routes (recupere le donne dans  la base de donnes)
app.get("/", (req, res) => {
  req.getConnection((err, connection) => {
    if (err) console.log(err);
    else {
      connection.query("SELECT * FROM users", [], (err, data) => {
        if (err) console.log(err);
        else {
          res.status(200).render("index", { data });
          console.log(data);
        }
      });
    }
  });
});

//route post (ajouter dans la base de donnees)
app.post("/users", (req, res) => {
  const id = req.body.id;
  const nom = req.body.nom;

  req.getConnection((err, connection) => {
    if (err) console.log(err);
    else {
      connection.query(
        "INSERT INTO users (id,nom) VALUES(?,?)",
        [id, nom],
        (err, data) => {
          if (err) console.log(err);
          else {
            res.status(300).redirect("/");
          }
        }
      );
    }
  });
});
app.use((req, res) => {
  res.status(404).render("notfound");
});

//ecouter server
app.listen(3000);
console.log("pret à ecouter au port 3000");
