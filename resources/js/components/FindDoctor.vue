<template>
    <div>
        <div class="card">
            <div class="card-header">
                Find Doctor
            </div>
            <div class="card-body">
                <datepicker></datepicker>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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

        }
    },
    components:{
        datepicker
    }
}
</script>
