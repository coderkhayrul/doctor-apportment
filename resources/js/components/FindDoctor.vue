<template>
    <div>
        <div class="card">
            <div class="card-header">
                Find Doctor
            </div>
            <div class="card-body">
                <datepicker :format="custromDate" v-model="time" :inline="true"></datepicker>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Doctor
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
                                <img src="'/upload/'+ d.doctors.image" width="80" alt="Doctor Image">
                            </td>
                            <td>{{d.doctor.name}}</td>
                            <td>{{d.doctor.department}}</td>
                            <td>
                                <a :href="'/new-appointment/'+ d.user_id+'/'+d.date">
                                    <button class="btn btn-success">Book Appointment</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</template>

<script type="text/javascript">
    import datepicker from 'vuejs-datepicker';
    import moment from 'moment';
export default {

    data() {
        return{
            time:''
        }
    },
    components:{
        datepicker
    },
    methods: {
        custromDate(date){
            this.time = moment(date).format('YYYY-MM-DD');
        }
    },
    mounted(){
        axios.get('/api/doctors/today').then((response) =>{
            this.doctors = response.data
        });

        }
    }
</script>
