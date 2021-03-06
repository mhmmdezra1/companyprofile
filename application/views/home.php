<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Company Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		html {
			scroll-behavior: smooth;
		}

		.package,
		.contact,
		.service,
		.about {
			position: relative;
			display: flex;
			justify-content: space-around;
			align-items: center;
			flex-wrap: wrap;
			flex-direction: row;
			width: 100%;
			height: 160px;
		}

		.jumbotron {
			padding: 20px;
			background-image: url('img/poto2.jpg');
			background-size: cover;
			height: 620px;
			margin-top: 20px;

		}

		.jumbotron .display-4 {
			margin-top: 150px;
			margin-left: 350px;
			font-size: 30pt;
			font-weight: bold;
			color: #eeee;
		}

		.jumbotron .lead {
			margin-left: 350px;
			color: #eeee;
			font-family: montserrat;
			font-size: medium;
		}

		.jumbotron hr {
			margin-left: 350px;
			width: 600px;
		}

		.jumbotron .lead {
			margin-left: 350px;

		}

		.jumbotron .btn {
			margin-left: 350px;
		}

		.card {
			width: 20rem;
			margin-top: -50px;
		}

		.card .display-4 {
			font-size: 20px;
		}

		.garis {
			width: 100px;
			border-top: 3px solid #eaeaea;
			margin-top: -50px;
		}

		.col-md-3 img {
			margin-left: 100px;
			margin-top: -20;
		}

		.testimonial {
			background-color: #cce3ff;
		}

		.nav-link {
			margin-left: 5;
		}

	</style>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<!-- <script src="https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js"></script> -->

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><strong>EGVS RENT</strong></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#home">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">ABOUT US</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#service">OUR SERVICE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#package">PACKAGE</a>
					<li class="nav-item">
						<a class="nav-link" href="#contact">CONTACT US</a>
					</li>
					</li>
				</ul>
			</div>
			<div class="col-md-5 text-end">
				<button type="button" class="btn btn-outline-primary me-2">Login</button>
				<button type="button" class="btn btn-primary">Sign-up</button>
			</div>
		</div>
	</nav>

	<div class="jumbotron">
		<h1 class="display-4">SEWA ALAT BROADCASTING ANDA SEKARANG!</h1>
		<hr class="my-4">
		<p class="lead">Jasa penyewaan alat taupuna atribut vlogging maupun shooting dan lain - lain, dengan harga yang
			terjangkau dan proses cepat</p>
		<a class="btn btn-primary btn-lg" href="#contact" role="button">Sewa Sekarang</a>
		</p>
	</div>
	<div class="container">
		<div class="card text-center">
			<div class="card-header h3">
				Vlog <br>
				<span class="display-4">Rp 1.000.0000,-</span>
			</div>
			<div class="card-body">
				<ul class="list-group list-group-flush mb-3">
					<li class="list-group-item">Microphone</li>
					<li class="list-group-item">Wireless Camera</li>
					<li class="list-group-item">GoPro</li>
					<li class="list-group-item">Gorilla</li>
					<li class="list-group-item">Stabilizer</li>
				</ul>
			</div>
		</div>
	</div>

	<h3 class="mt-5 text-center about" id="about">ABOUT US</h3>
	<hr class="garis" />

	<div class="bg-light text-justify p-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					EVGS ialah suatu perusahaan yang bergerak di bidang penyewaan alat - alat broadcasting yang relatif
					murah dan pertama di bogor, serta dengan alat - alat yang terbaru.
				</div>
				<div class="col-md-6">
					EVGS juga dapat menjamin bahwa alat yang digunakan tidak ada kekurangan dan kecacatan, pengguna jadi
					tidak perlu lagi meragukan kualitas maupun kuantitas dari EVGS.
				</div>
			</div>
		</div>
	</div>


	<h3 class="mt-5 text-center service" id="service">OUR SERVICE</h3>
	<hr class="garis" />
	<div class="container">
		<div class="row text-center mt-5">
			<div class="col-md-4">
				<i class="fas fa-bullhorn h1"></i>
				<h4><strong>Alat Broadcasting System</strong></h4>
				Kami menyediakan alat broadcasting system yang cukup lengkap untuk dapat digunakan oleh pelanggan
			</div>
			<div class="col-md-4">
				<i class="fas fa-laptop h1"></i>
				<h4><strong>Virtual Event</strong></h4>
				Kami juga menyediakan perlatan maupun atribut mengenai virtual event
			</div>
			<div class="col-md-4">
				<i class="fas fa-camera-retro h1"></i>
				<h4><strong>Kamera</strong></h4>
				Kami juga menyediakan kamera yang beragam mulai dari mirrorless dan sebagainya
			</div>
		</div>

		<div class="row text-center mt-5">
			<div class="col-md-4">
				<i class="fas fa-film h1"></i>
				<h4><strong>Video Shooting</strong></h4>
				Kami juga menyediakan alat untuk orang yang ingin melakukkan video shooting tentunya dengan kelengkapan yang
				cukup
			</div>
			<div class="col-md-4">
				<i class="fas fa-video h1"></i>
				<h4><strong>Sewa Alat Vlogging</strong></h4>
				Kami juga menyediakan sewa alat vlogging mulai dari vlogger pemula hingga yang professional
			</div>
			<div class="col-md-4">
				<i class="far fa-lightbulb h1"></i>
				<h4><strong>Lightning Studio</strong></h4>
				Kami juga menyediakan alat lightning studio untuk menunjang dunia perfilman dan sebagainya.
			</div>
		</div>
	</div>



	<h3 class="mt-5 text-center package" id="package">PACKAGE</h3>
	<hr class="garis" />

	<div class="container">
		<div class="row text-center mt-5">
			<div class="col-md-4">
				<a href="">
					<img src="img/brpdcast.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="img/film shooting.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="img/vlogger.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
		<div class="row text-center mt-5">
			<div class="col-md-4">
				<a href="">
					<img src="img/ve.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="img/lightning.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="img/stremer.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
	</div>

	<h3 class="mt-5 mb-3 text-center contact" id="contact">TESTIMONIALS</h3>
	<hr class="garis" />

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="testimonial pt-5 pb-5">
					<div class="container">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-2">
								<img src="img/elizabeth.jpg" class="rounded-pill" width="100%">
							</div>
							<div class="col-md-7 text-justify font-italic">
								<h4>Elizabeth Licoln</h4>
								Terimakasih EVGS, dengan adanya EVGS kita tidak usah pusing - pusing jika tidak memiliki
								alat - alat broadcasting, selain harga terjangkau barang yang disewakan juga dalam
								kondisi yang sangat baik
							</div>
							<div class="col-md-2"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="..." alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="..." alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
	</div>


	<h3 class="mt-5 mb-3 text-center contact" id="contact">CONTACT US</h3>
	<hr class="garis" />

	<div class="container">
		<div class="row">

			<div class="col-md-7">
				<div class="form-group">
					<label><strong>Nama Lengkap</strong></label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label><strong>Email</strong></label>
					<input type="email" name="" class="form-control">
				</div>
				<div class="form-group">
					<label><strong>Sewa</strong></label>
					<textarea type="text" class="form-control" rows="5"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Kirim</button>
			</div>
			<div class="col-md-3">
				<img src="img/vlog.png" width="300px">
			</div>
		</div>
	</div>
	<!-- Example for get list from firebase -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul id="messageList"></ul>
			</div>
		</div>
	</div>
	<!-- /Example for get list from firebase -->

	<footer class="mt-5 bg-dark">
		<div class="container">
			<div class="row text-white p-4 text-justify">
				<div class="col-md-4">
					Contact Info :
					<br>
					+628 5782 797 602
					<br>
					Jl. Raya Bojong gede Kabupaten Bogor, Jawa Barat 16922
				</div>
				<div class="col-md-4">

				</div>
				<div class="col-md-4">
					MARI BERLANGGANAN
					<input type="text" name="" class="form-control rounded-pill mt-3" placeholder="masukkan email anda">
					<a href="https://www.instagram.com/">
						<button class="btn btn-outline-primary rounded-circle mr-3 mt-3">

							<i class="fab fa-instagram"></i>
						</button></a>
					<a href="https://twitter.com/login">
						<button class="btn btn-outline-primary rounded-circle mr-3 mt-3">
							<i class="fab fa-twitter"></i>

						</button></a>
					<a href="https://id-id.facebook.com/">
						<button class="btn btn-outline-primary rounded-circle mr-3 mt-3">


							<i class="fab fa-facebook-f"></i>
						</button></a>
					<a href="https://id.linkedin.com/">
						<button class="btn btn-outline-primary rounded-circle mr-3 mt-3">
							<i class="fab fa-linkedin-in"></i>

						</button></a>
					<a href="https://www.google.com/gmail/">
						<button class="btn btn-outline-primary rounded-circle mr-3 mt-3">

							<i class="fas fa-envelope"></i>
						</button></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>

	<!-- Add the Firebase and Cloud Firestore libraries to your app -->
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>
	<script type="module">
		let messageList = document.getElementById('messageList');

		// Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyDqpjDtCC7Wy1yneMulWCafeehM9kkgufI",
            authDomain: "digital-invitation-74e38.firebaseapp.com",
            databaseURL: "https://digital-invitation-74e38-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "digital-invitation-74e38",
            storageBucket: "digital-invitation-74e38.appspot.com",
            messagingSenderId: "523286749072",
            appId: "1:523286749072:web:bcf6f73188ba6907a39d15"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        // Initialize Firestore
        const db = firebase.firestore();
				// Getting Collection in Firestore
				let sample = db.collection('messages');


				async function main() {
						const userObj = new User();
						const data = await userObj.getAll();
						if (data) {
							data.map((item) => {
								console.log(`item`, item.name)
								const newItem = document.createElement('li');
								const message = document.createElement('p');
								message.innerHTML = item.name
								messageList.appendChild(newItem)
								newItem.appendChild(message)
							})
						}
						return data;
				}


				class User {
						usersRef = db.collection("messages");

						async add(name, password, email) {
								const user = { name, password, email};

								try {
										const docRef = await this.usersRef.add(user);
										console.log('User Added with ID: ', docRef.id);
										user.id = docRef.id;

								} catch (error) {
										console.error('Error Adding User: ', error)
								}

								return user;
						}

						async getAll() {
								const users = [];

								try {
										const snapshot = await this.usersRef.get()
										snapshot.forEach(doc => users.push({id: doc.id, ...doc.data()}))
								} catch (err) {
										console.error('Error Getting Users: ', error);
								}

								return users;
						}

						async get(id) {
								let user;

								try {
										let doc = await this.usersRef.doc(id).get();
										
										if(doc.exists) 
												user = {id: doc.id, ...doc.data()};
										else
												console.log('No document found with id: ', id);
								} 
								catch (error) {
										console.error('Error in getting user: ', error);
								}

								return user;
						}

						async delete(id) {
								try {
										await this.usersRef.doc(id).delete();
										console.log('User is deleted with id: ', id);
								} catch (error) {
										console.error('Error in deleting user: ', error);
								}
						}
				}

				main();
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script>
		$(document).ready(function () {
			console.log('sample')
			// jQuery methods go here...

		});

	</script> -->
</body>

</html>
