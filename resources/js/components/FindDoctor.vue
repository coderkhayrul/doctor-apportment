<template>
    <div>
        <div class="card">
            <div class="card-header">
                Find Doctor
            </div>
            <div class="card-body">
                <datepicker class="my-datepicker" :disabledDates="disabledDates" calendar-class="my-datepicker_calendar" :format="custromDate" v-model="time" :inline="true"></datepicker>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Doctor List
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Booking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(d, index) in doctors">
                            <td scope="row">{{ index+1 }}</td>
                            <td>
                                <!-- <img :src="'/upload/'+ d.doctor.image" width="80" alt="Doctor Image"> -->
                            </td>
                            <td>{{d.doctor.name}}</td>
                            <td>{{d.doctor.department}}</td>
                            <td>
                                <a :href="'/new-appointment/'+ d.user_id+'/'+d.date">
                                    <button class="btn btn-success">Book Appointment</button>
                                </a>
                            </td>
                        </tr>
                        <th v-if="doctors.lenght == 0">
                            No Doctor Appointment found {{ this.time }}
                        </th>
                    </tbody>
                </table>
                <div class="text-center">
                    <pulse-loader :loading="loading" :color="color" :size="size"></pulse-loader>
                </div>
            </div>
        </div>

    </div>
</template>

<script type="text/javascript">
    import datepicker from 'vuejs-datepicker';
    import moment from 'moment';
    import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
export default {

    data() {
        return{
            time:'',
            doctors:[],
            loading:false,
            disabledDates:{
                to: new Date(Date.now() - 8640000)
            }
        }
    },
    components:{
        datepicker,
        PulseLoader
    },
    methods: {
        custromDate(date){
            this.loading = true;
            this.time = moment(date).format('YYYY-MM-DD');
            axios.post('api/finddoctor',{date:this.time}).
            then((response) =>{
                setTimeout(()=>{
                    this.doctors = response.data
                    this.loading = false
                }, 1000)
                this.doctors = response.data

            }).catch((error) => {alert('error')})
        }
    },
    mounted(){
        this.loading = true
        axios.get('/api/doctors/today').then((response) =>{
            this.doctors = response.data
            this.loading = false
        });

        }
    }
</script>

<style scoped>
    .my-datepicker >>> .my-datepicker_calendar{
        width: 100%;
        height: 330px;
    }
</style>
