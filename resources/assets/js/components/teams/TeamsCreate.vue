<template>
    <div>
        <div class="form-group">
            <router-link to="/admin/teams" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Create new team</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Name</label>
                            <input type="text" v-model="team.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                team: {
                    name: ''
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newTeam = app.team;
                axios.post('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/teams', newTeam)
                    .then(function (resp) {
                        app.$router.replace('/admin/teams');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Unable to save the team");
                    });
            }
        }
    }
</script>