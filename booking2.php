<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style type="text/css">
	body{
		background-color: ghostwhite;
	}
/*Increment*/
:root {
  --width-container: 540px;
}
.container {
  width: var(--width-container);
  max-width: 100%;
  margin: 0 auto;
  padding: 0 var(--space-8);
  border: var(--border);
  background-color: var(--color-white);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
}
.input-row {
  display: flex;
  padding: var(--space-8) 0;
  border-bottom: var(--border);
}
.input-row:last-child {
  border-bottom: 0;
}
.title {
  margin-right: var(--space-8);
}
.label {
  margin-bottom: var(--space-1);
  font-weight: bold;
}
.description {
  color: var(--color-gray-600);
}
.input {
  display: flex;
  align-items: center;
  margin-left: auto;
}
button {
  display: flex;
  justify-content: center;
  align-items: center;
  width: var(--space-12);
  height: var(--space-12);
  border: 1px solid var(--color-blue-500);
  border-radius: var(--round);
  background-color: var(--color-white);
}
button:hover {
  background-color: var(--color-blue-200);
  cursor: pointer;
}
button:focus {
  outline: none;
  box-shadow: var(--shadow-focus);
}
button[disabled] {
  opacity: var(--opacity-50);
  pointer-events: none;
}
button:active {
  background-color: var(--color-blue-300);
}

.number {
  font-size: var(--text-lg);
  min-width: var(--space-12);
  text-align: center;
}
.icon {
  user-select: none;
}
.dim {
  color: var(--color-gray-400);
}


</style>
<body>
<header>
	   <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <img src="assets/image/Travelwire_logo_final.jpg" width="200px">
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- <li class="nav-item active">
                                <a class="nav-link btn btn-primary text-light" href="#">Login/Register</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
</header>
<div class="col-md-12 col-lg-12 mt-3">
	<div class="row">
	<div class="col-md-3 col-sm shadow-sm p-3 mb-5 bg-white rounded">
		<div class="text-center">
			<h4 style="color:#061828">2 Night Perfect Day Cruise</h4>
		</div>
		<br>
				<div class="ml-2">
					<label>Leaving from Miami, Florida onboard Freedom of the Seas</label><br>
				<label>Feb 7, 2022<small><i class="fas fa-arrow-right text-muted"></i></small> Feb 9, 2022</label><br>
				<a href="">View itinerary deatils</a><br><hr>
				</div>
				
				<div class="container">
					<table class="table table-borderless">
				  <tbody>
				    <tr>
				      <th scope="row"><img src="assets/image/icons/bed.png" width="30px"></th>
				      <td>Staterooms</td>
				    </tr>
				    <tr>
              <tr scope="row">
              <td><b>Room</b></td>
            </tr>
				      <th scope="row"><img src="assets/image/icons/guest.jpg" width="50px"></th>
				      <td>Guest Info</td>
				    </tr>
				    <tr>
				      <th scope="row"><img src="assets/image/icons/food.jpg" width="40px"></th>
				      <td colspan="2">Dining & Options</td>
				    </tr>
				    <tr>
				      <th scope="row"><img src="assets/image/icons/payment.png" width="40px"></th>
				      <td colspan="2">Payment</td>
				    </tr>
				  </tbody>
				</table>
				</div>
	</div>
	<div class="col-md-9">
		<div class="mt-4 mb-3">
			<h2>How many guests for your room?</h2>
			<label>Most rooms accommodate up to 4 guests</label>
		</div>
		<div class="card text-center shadow  mb-5 bg-white rounded">
  <div class="card-body">
  	<div class="text-right">
  <div class="input-row">
    <div class="text-left">
      <p>Adults</p>
    </div>
    <div class="input">
      <button class="minus" aria-label="Decrease by one" disabled>
        <svg width="30" height="30" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line y1="1" x2="16" y2="1" stroke="#0064FE" stroke-width="2" class="icon" />
        </svg>
      </button>
      <div class="number dim" style="width:60px; font-size: 40px;">0</div>
      <button class="plus" aria-label="Increase by one">
        <svg width="30" height="30" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="plus">
          <line x1="8" y1="4.37114e-08" x2="8" y2="16" stroke="#0064FE" stroke-width="2" />
          <line y1="8" x2="16" y2="8" stroke="#0064FE" stroke-width="2" />
        </svg>
      </button>
    </div>
  </div>
   <div class="input-row">
    <div class="text-left">
      <p class="label">Children</p>
      <p class="description text-muted">Age 0-12</p>
    </div>
    <div class="input">
      <button class="minus" aria-label="Decrease by one" disabled>
        <svg width="30" height="30" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line y1="1" x2="16" y2="1" stroke="#0064FE" stroke-width="2" class="icon" />
        </svg>

      </button>
      <div class="number dim" style="width:60px; font-size: 40px;">0</div>
      <button class="plus" aria-label="Increase by one">
        <svg width="30" height="30" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="plus">
          <line x1="8" y1="4.37114e-08" x2="8" y2="16" stroke="#0064FE" stroke-width="2" />
          <line y1="8" x2="16" y2="8" stroke="#0064FE" stroke-width="2" />
        </svg>
      </button>
    </div>
  </div>

  	</div>
  </div>

  <div class="card-footer text-muted text-right">
    <div class="form-group form-check">
       <input type="checkbox" class="form-check-input" id="exampleCheck1" width="20px">
    <label class="form-check-label" for="exampleCheck1">I need an accessible room <i class="fas fa-wheelchair"></i></label>
   
  </div>
  	<a href="booking3.php" class="btn btn-primary">Continue</a>
  </div>
</div>


<!-- text content start -->
<div style="font-size: 12px; margin-top: 300px;" class="mb-5">
	<b>Important Travel Notice</b>
	<p>Health and safety protocols, guest conduct rules, and regional travel restrictions vary by ship and destination, and are subject to change without notice. Due to evolving health protocols, imagery and messaging may not accurately reflect onboard and destination experiences, offerings, features, or itineraries. These may not be available during your voyage, may vary by ship and destination, and may be subject to change without notice.</p><br><hr>
	<p>+ Taxes, fees and port expenses $97.94 USD*</p>
	<p>*Price is per person, cruise only, applies to selected sailing, lowest available fare stateroom category, based on double-occupancy, reflects any promotional savings, and is subject to change and availability until booked. Non-refundable deposit: Non-refundable deposit booking (“NRDB”) cancelled prior to final payment due date will receive a future cruise credit in the amount of the deposit minus a $100 per person service fee. FCC is non-transferable and expires after 12-months from issue date. 100USD/100CAD/80EUR per person service fee applies to changes to NRDB ship or sail date.</p><br>
	<!-- Footer Start-->
	<div class="text-left">© 2021 Travel wire</div>
	<div class="text-right">
		<a href="">Privacy</a>
		<a href="">Terms of Use</a>
	</div>
	<!-- Footer End -->
		
</div>
<!-- Text content end -->
	</div>
</div>
</div>
<script type="text/javascript">
	const buttons = document.querySelectorAll("button");
const minValue = 0;
const maxValue = 10;

buttons.forEach((button) => {
  button.addEventListener("click", (event) => {
    // 1. Get the clicked element
    const element = event.currentTarget;
    // 2. Get the parent
    const parent = element.parentNode;
    // 3. Get the number (within the parent)
    const numberContainer = parent.querySelector(".number");
    const number = parseFloat(numberContainer.textContent);
    // 4. Get the minus and plus buttons
    const increment = parent.querySelector(".plus");
    const decrement = parent.querySelector(".minus");
    // 5. Change the number based on click (either plus or minus)
    const newNumber = element.classList.contains("plus")
      ? number + 1
      : number - 1;
    numberContainer.textContent = newNumber;
    console.log(newNumber);
    // 6. Disable and enable buttons based on number value (and undim number)
    if (newNumber === minValue) {
      decrement.disabled = true;
      numberContainer.classList.add("dim");
      // Make sure the button won't get stuck in active state (Safari)
      element.blur();
    } else if (newNumber > minValue && newNumber < maxValue) {
      decrement.disabled = false;
      increment.disabled = false;
      numberContainer.classList.remove("dim");
    } else if (newNumber === maxValue) {
      increment.disabled = true;
      numberContainer.textContent = `${newNumber}+`;
      element.blur();
    }
  });
});

</script>
</body>
</html>