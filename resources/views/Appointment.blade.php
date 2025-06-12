<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Rendez-vous Médecins</title>
  <style>
   body {
  font-family: Arial, sans-serif;
  background: url("/images/eed8191a10a1a2beb74a3526a2d2344d.jpg") no-repeat center top;
  background-size: cover; /* ya contain, depend karta hai aapko kaisa effect chahiye */
 }



    .main-container{ padding-top: 30px;

    }
    .card {
      display: flex;
      justify-content: space-between;
      background-color: white;
      border: 1px solid #cce;
      border-radius: 8px;
      padding: 20px;
      max-width: 800px;
      margin: 20px auto;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .left, .right {
      width: 48%;
    }

    .title {
      font-weight: bold;
      color: #007bff;
      font-size: 18px;
    }

    .subtitle {
      color: #555;
      margin-bottom: 10px;
    }

    .info {
      margin: 5px 0;
    }

    .btn {
      display: inline-block;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      margin-top: 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-transform: uppercase;
    }

    .calendar {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 10px;
    }

    .day {
      background-color: rgb(91, 94, 248);
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 10px;
      width: 90px;
      text-align: center;
      color: white;
      font-size: 14px;
      cursor: pointer;
      user-select: none;
    }

    .next-rdv {
      background-color: #f0f7ff;
      border: 1px solid #cce;
      padding: 10px;
      border-radius: 6px;
      font-size: 14px;
    }

    .next-rdv a {
      color: #007bff;
      font-weight: bold;
      text-decoration: none;
    }

    /* Time slots container */
    #time-slots-container {
      max-width: 800px;
      margin: 20px auto;
      background: #fff;
      border: 1px solid #cce;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      display: none;
    }

    #time-slots {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    #time-slots .day {
      width: 80px;
      background-color: #5b5ef8;
      border-radius: 4px;
      padding: 10px;
      color: white;
      text-align: center;
      cursor: pointer;
      user-select: none;
    }

    #back-btn {
      margin-top: 20px;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-transform: uppercase;
    }
  </style>
</head>
<body>

<div class="main-container">
 <!-- Doctor 1 -->
  <div class="card">
    <div class="left">
      <div class="title">Dr Julien TOUBOUL</div>
      <div class="subtitle">Ophthalmologist</div>
      <div class="info">📍 68 Avenue d’Italie, 75013 Paris</div>
      <div class="info">💶 Sector 2 Agreement</div>
      <button class="btn">Book Appointment</button>
    </div>
   <div class="right">
  <div class="calendar" data-days="5"></div>
  <div class="next-rdv">
    Next Appointment on <a href="#">July 29, 2025</a>
  </div>

  <!-- Hidden time slots container inside the card -->
  <div class="time-slots-container" style="display:none; margin-top:10px;">
    <div class="title">Available Time Slots</div>
    <div class="time-slots" style="display:flex; flex-wrap:wrap; gap:10px;"></div>
    <button class="btn back-btn">Back to Calendar</button>
  </div>
</div>

  </div>

  <!-- Doctor 2 -->
  <div class="card">
    <div class="left">
      <div class="title">Dr Marie DUPONT</div>
      <div class="subtitle">Dermatologist</div>
      <div class="info">📍 15 Rue Oberkampf, 75011 Paris</div>
      <div class="info">💶 Sector 1 Agreement</div>
      <button class="btn">Book Appointment</button>
    </div>
    <div class="right">
      <div class="calendar" data-days="5"></div>
      <div class="next-rdv">
        Next Appointment on <a href="#">August 2, 2025</a>
      </div>
    </div>
  </div>

  <!-- Doctor 3 -->
  <div class="card">
    <div class="left">
      <div class="title">Dr Alain MARTIN</div>
      <div class="subtitle">Cardiologist</div>
      <div class="info">📍 101 Boulevard Haussmann, 75008 Paris</div>
      <div class="info">💶 Sector 2 Agreement</div>
      <button class="btn">Book Appointment</button>
    </div>
    <div class="right">
      <div class="calendar" data-days="5"></div>
      <div class="next-rdv">
        Next Appointment on <a href="#">August 5, 2025</a>
      </div>
    </div>
  </div>

  <!-- Doctor 4 -->
  <div class="card">
    <div class="left">
      <div class="title">Dr Sophie LEBRUN</div>
      <div class="subtitle">General Practitioner</div>
      <div class="info">📍 8 Rue de la République, 75003 Paris</div>
      <div class="info">💶 Sector 1 Agreement</div>
      <button class="btn">Book Appointment</button>
    </div>
    <div class="right">
      <div class="calendar" data-days="5"></div>
      <div class="next-rdv">
        Next Appointment on <a href="#">August 10, 2025</a>
      </div>
    </div>
  </div>

  <!-- Doctor 5 -->
  <div class="card">
    <div class="left">
      <div class="title">Dr Marc DELAUNAY</div>
      <div class="subtitle">Pediatrician</div>
      <div class="info">📍 22 Avenue des Champs, 75016 Paris</div>
      <div class="info">💶 Sector 2 Agreement</div>
      <button class="btn">Book Appointment</button>
    </div>
    <div class="right">
      <div class="calendar" data-days="5"></div>
      <div class="next-rdv">
        Next Appointment on <a href="#">August 15, 2025</a>
      </div>
    </div>
  </div>

  <!-- Time slots container -->
  <div id="time-slots-container">
    <div class="title">Available Time Slots</div>
    <div id="time-slots"></div>
    <button id="back-btn">Back to Calendar</button>
  </div>

</div>

 
  <script>
    function generateDays(container, count) {
      const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      const monthNames = ["January", "February", "March", "April", "May", "June",
                          "July", "August", "September", "October", "November", "December"];

      const today = new Date();
      container.innerHTML = ""; // clear before adding

      for (let i = 0; i < count; i++) {
        const date = new Date();
        date.setDate(today.getDate() + i);

        const dayName = dayNames[date.getDay()];
        const monthName = monthNames[date.getMonth()];
        const dayNumber = date.getDate();

        const dayDiv = document.createElement("div");
        dayDiv.className = "day";
        dayDiv.innerHTML = `${dayName}<br>${monthName} ${dayNumber}`;

        container.appendChild(dayDiv);
      }
    }

    function generateTimeSlots(container, date) {
      container.innerHTML = ""; // clear slots

      const startHour = 9;
      const endHour = 16; // 4 PM
      const slots = [];

      for(let hour = startHour; hour < endHour; hour++) {
        slots.push(`${hour.toString().padStart(2, '0')}:00`);
        slots.push(`${hour.toString().padStart(2, '0')}:30`);
      }
      slots.push("16:00"); // add 4:00 PM exactly

      slots.forEach(time => {
        const slotDiv = document.createElement("div");
        slotDiv.className = "day";
        slotDiv.style.width = "80px";
        slotDiv.style.cursor = "pointer";
        slotDiv.innerText = time;

        slotDiv.addEventListener('click', () => {
          alert(`Appointment successfully at ${date} ${time}`);
        });

        container.appendChild(slotDiv);
      });
    }

    document.querySelectorAll('.calendar').forEach(calendar => {
  const count = parseInt(calendar.getAttribute('data-days')) || 5;
  generateDays(calendar, count);

  calendar.addEventListener('click', event => {
    if (event.target.classList.contains('day')) {
      const cardRight = calendar.parentElement; // `.right`
      const calendarDiv = calendar;
      const nextRdv = calendar.nextElementSibling;
      const timeSlotsContainer = cardRight.querySelector('.time-slots-container');
      const timeSlotsDiv = timeSlotsContainer.querySelector('.time-slots');

      // Hide calendar and next appointment
      calendarDiv.style.display = "none";
      if (nextRdv) nextRdv.style.display = "none";

      // Show time slots container
      timeSlotsContainer.style.display = "block";

      // Prepare date string from clicked day text
      let dateText = event.target.innerText.replace("\n", " ");

      // Generate slots inside this card's time-slots div
      generateTimeSlots(timeSlotsDiv, dateText);
    }
  });
});

// Back buttons inside cards
document.querySelectorAll('.back-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const timeSlotsContainer = btn.parentElement;
    const cardRight = timeSlotsContainer.parentElement;
    const calendarDiv = cardRight.querySelector('.calendar');
    const nextRdv = cardRight.querySelector('.next-rdv');

    // Hide time slots, show calendar and next appointment again
    timeSlotsContainer.style.display = "none";
    calendarDiv.style.display = "flex";
    if (nextRdv) nextRdv.style.display = "block";
  });
});


    // Back button logic
    document.getElementById('back-btn').addEventListener('click', () => {
      // Show all cards
      document.querySelectorAll('.card').forEach(card => {
        card.style.display = "flex";
      });

      // Show all calendars and next appointment links
      document.querySelectorAll('.calendar').forEach(cal => {
        cal.style.display = "flex";
        if(cal.nextElementSibling) cal.nextElementSibling.style.display = "block";
      });

      // Hide time slots container
      document.getElementById('time-slots-container').style.display = "none";
    });
  </script>

</body>
</html>
