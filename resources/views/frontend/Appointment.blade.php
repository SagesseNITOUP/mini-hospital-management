<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Rendez-vous Médecins</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("/images/eed8191a10a1a2beb74a3526a2d2344d.jpg") no-repeat center top;
            background-size: cover;
        }
        .main-container {
            padding-top: 30px;
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
            flex-wrap: wrap;
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
        .time-slots-container {
            display: none;
            margin-top: 10px;
        }
        .time-slots {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .back-btn {
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
    @foreach($doctors as $doctor)
        <div class="card">
            <div class="left">
                <div class="title">{{ $doctor->name }}</div>
                <div class="subtitle">{{ $doctor->speciality }}</div>
                <div class="info">📍 68 Avenue d’Italie, 75013 Paris</div>
                <div class="info">💶 Sector 2 Agreement</div>
                <button class="btn">Book Appointment</button>
            </div>
            <div class="right">
                <div class="calendar" data-days="5"></div>
                <div class="next-rdv">Next Appointment on <a href="#">July 29, 2025</a></div>

                <div class="time-slots-container">
                    <div class="title">Available Time Slots</div>
                    <div class="time-slots"></div>
                    <button class="btn back-btn">Back to Calendar</button>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    function generateDays(container, count) {
        const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        const today = new Date();
        container.innerHTML = "";

        for (let i = 0; i < count; i++) {
            const date = new Date();
            date.setDate(today.getDate() + i);

            const dayDiv = document.createElement("div");
            dayDiv.className = "day";
            dayDiv.innerHTML = `${dayNames[date.getDay()]}<br>${monthNames[date.getMonth()]} ${date.getDate()}`;
            container.appendChild(dayDiv);
        }
    }

    function generateTimeSlots(container, date) {
        container.innerHTML = "";
        const slots = [];

        for(let hour = 9; hour < 16; hour++) {
            slots.push(`${hour.toString().padStart(2, '0')}:00`);
            slots.push(`${hour.toString().padStart(2, '0')}:30`);
        }
        slots.push("16:00");

        slots.forEach(time => {
            const slotDiv = document.createElement("div");
            slotDiv.className = "day";
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
                const rightSection = calendar.closest('.right');
                const timeSlotsContainer = rightSection.querySelector('.time-slots-container');
                const timeSlotsDiv = timeSlotsContainer.querySelector('.time-slots');
                const nextRdv = rightSection.querySelector('.next-rdv');

                calendar.style.display = 'none';
                if (nextRdv) nextRdv.style.display = 'none';

                timeSlotsContainer.style.display = 'block';

                const dateText = event.target.innerText.replace("\n", " ");
                generateTimeSlots(timeSlotsDiv, dateText);
            }
        });
    });

    document.querySelectorAll('.back-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const timeSlotsContainer = btn.closest('.time-slots-container');
            const rightSection = btn.closest('.right');
            const calendar = rightSection.querySelector('.calendar');
            const nextRdv = rightSection.querySelector('.next-rdv');

            timeSlotsContainer.style.display = 'none';
            calendar.style.display = 'flex';
            if (nextRdv) nextRdv.style.display = 'block';
        });
    });
</script>

</body>
</html>
