<div class="flex justify-center items-center w-full h-full">
    <div class="loader">
        <li class="ball"></li>
        <li class="ball"></li>
        <li class="ball"></li>
    </div>
    <style>
        /* From Uiverse.io by ashish-yadv */
        .loader {
            width: 60px;
            display: flex;
            justify-content: space-evenly;
        }

        .ball {
            list-style: none;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #fff;
        }

        .ball:nth-child(1) {
            animation: bounce-1 2.1s ease-in-out infinite;
        }

        @keyframes bounce-1 {
            50% {
                transform: translateY(-18px);
            }
        }

        .ball:nth-child(2) {
            animation: bounce-3 2.1s ease-in-out 0.3s infinite;
        }

        @keyframes bounce-2 {
            50% {
                transform: translateY(-18px);
            }
        }

        .ball:nth-child(3) {
            animation: bounce-3 2.1s ease-in-out 0.6s infinite;
        }

        @keyframes bounce-3 {
            50% {
                transform: translateY(-18px);
            }
        }
    </style>
</div>
