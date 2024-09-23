<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .circle {
            position: relative;
            width: 200px;
            height: 200px;
            background-color: greenyellow;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text {
            width: 100%;
            height: 100%;
            position: absolute;
            animation: anim 10s linear infinite;
        }

        @keyframes anim {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .text span {
            position: absolute;
            left: 50%;
            font-size: 1.2em;
            transform-origin: 0 100px;
        }
    </style>
</head>

<body>
    <div class="circle">
        <div class="text">
            <p> Get in touch - Get in touch - Get in touch - </p>
        </div>
    </div>
    <script>
        const text = document.querySelector('.text p');
        text.innerHTML = text.innerText.split('').map(
            (char, i) => `<span style="transform:rotate(${i * 8.3}deg">${char}</span>`
        ).join('');
    </script>
</body>

</html>