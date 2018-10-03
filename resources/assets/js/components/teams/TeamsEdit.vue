<template>
    <div>
        <div class="form-group">
            <router-link to="/admin/teams#/admin/teams" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit team</div>
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
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.teamId = id;
            axios.get('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/teams/' + id)
                .then(function (resp) {
                    app.team = resp.data;
                })
                .catch(function () {
                    alert("Unable to load team record")
                });
        },
        data: function () {
            return {
                teamId: null,
                team: {
                    name: ''
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newTeam = app.team;
                axios.patch('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/teams/' + app.teamId, newTeam)
                    .then(function (resp) {
                        app.$router.replace('http://test.rinconmountaintech.com/sites/lhptest/public/admin/teams#/admin/teams');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Unable to update team record");
                    });
            }
        }
    }
</script>