<!-- component -->

<div class="relative w-full">

    <div class="relative ">

        <div class="container m-auto px-6 pt-32 md:px-12 lg:pt-[4.8rem] lg:px-7">
            <x-flash-message />
            <div class="flex items-center flex-wrap px-2 md:px-0">
                <div class="relative lg:w-6/12 lg:py-24 xl:py-32 ">
                    <h1 class="font-bold text-4xl text-sky-600 md:text-5xl lg:w-10/12">Looking for a job ?</h1>
                    <br/>
                    @include('partials._searchbox')
                    <p class="mt-8 text-gray-700 lg:w-10/12">
                        Help shape the future by joining one of the fastest growing technology startups.
                    </p>
                </div>
                <div class="ml-auto -mb-24 lg:-mb-56 lg:w-6/12 hidden lg:block">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_hebegwpc.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

@endpush

@push('style')
    <style>
        .slider {
            height: 60px;
            position: relative;
            width: 100%;

            display: grid;
            place-items: center;
            overflow: hidden;
        }
        .slider::before,
        .slider::after{
            position:absolute;
            background-image:linear-gradient(to right,rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
            content:'';
            height:100%;width:25%;
            z-index:2;pointer-events:none;
        }
        .slider::before{
            left:0;
            top:0;
        }
        .slider::after{
            right:0;
            top:0;
            transform:rotateZ(180deg);
        }

        /*  IMPORTANT CODE BELOW */

        .slide-track {
            width: calc(150px * 20);
            display: flex;
            animation: scroll 20s linear infinite;
            justify-content: space-between;
        }

        .slide-track2 {
            width: calc(150px * 15);
            display: flex;
            animation: scroll2 15s linear infinite;
            justify-content: space-between;
        }

        .slide {
            width: 150px;
            height: 60px;

            display: grid;
            place-items: center;
            transition:0.5s;
            cursor:pointer;
        }
        .slide:hover{
            transform:scale(0.8)
        }

        @keyframes scroll {
            0% {
                transform: translateX(0px);
            }
            100% {
                transform: translateX(calc(-150px * 10));
            }
        }

        @keyframes scroll2 {
            0% {
                transform: translateX(0px);
            }
            100% {
                transform: translateX(calc(-150px * 5));
            }
        }

        @media screen and (max-width: 768px) {
            .slide-track {
                width: calc(80px * 20);
            }

            .slide-track2 {
                width: calc(80px * 15);
            }

            .slide {
                width: 80px;
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0px);
                }
                100% {
                    transform: translateX(calc(-80px * 10));
                }
            }

            @keyframes scroll2 {
                0% {
                    transform: translateX(0px);
                }
                100% {
                    transform: translateX(calc(-80px * 5));
                }
            }
        }
    </style>
@endpush
