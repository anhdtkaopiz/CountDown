<template>
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="time text-success">{{day1}}{{day2}}/{{hour1}}{{hour2}}:{{minute1}}{{minute2}}:{{second1}}{{second2}}</h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: "WelcomePages",
        data() {
            return {
                day1: '',
                day2: '',
                hour1:'',
                hour2:'',
                minute1: '',
                minute2: '',
                second1: '',
                second2: '',
            }
        },
        created() {
            setInterval(this.getTime);
        },
        methods: {


            getTime() {
                var countDownDate = new Date("Jan 5, 2019 0:0:0").getTime();
                // Get todays date and time
                var now = new Date().getTime();
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                // Time calculations for days, hours, minutes and seconds
                this.day1 = Math.floor(distance / (1000 * 60 * 60 * 240));
                this.day2 = Math.floor(distance / (1000 * 60 * 60 * 24));
                this.hour1 = Math.floor(((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))/10);
                this.hour2 = Math.floor(((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) % 10);

                this.minute1 = Math.floor(((distance % (1000 * 60 * 60)) / (1000 * 60))/10);
                this.minute2 = Math.floor(((distance % (1000 * 60 * 60)) / (1000 * 60))%10);

                this.second1 = Math.floor(((distance % (1000 * 60)) / 1000)/10);
                this.second2 = Math.floor(((distance % (1000 * 60)) / 1000)%10);


            }
        }
    }
</script>

<style scoped>
    .time {
        font-family: Aldrich;
        font-size: 20vh;
        line-height: 90vh;
    }
    h1{

    }
</style>