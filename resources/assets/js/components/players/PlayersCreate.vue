<template>
    <div>
        <div class="form-group">
            <router-link to="/admin/players" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Create new player</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">First Name</label>
                            <input type="text" v-model="player.first_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Last Name</label>
                            <input type="text" v-model="player.last_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Team</label>
                            <br />
                            <select v-model="player.team_id">
                                <option value="" selected>Select one:</option>
                                <option v-for="team in teams" :value="team.id">
                                    {{ team.name }}
                                </option>
                            </select>
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
            var app = this;
            axios.get('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/teams')
                .then(function (resp) {
                    app.teams = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Unable to load teams.");
                });
            return {
                player: {
                    first_name: '',
                    last_name: ''
                },
                teams: {}
            }
        },
        methods: {
            handleSelect(id, e) {
                // use the id and event to do what you need with vuex here.
            },
            saveForm() {
                var app = this;
                var newPlayer = app.player;
                axios.post('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/players', newPlayer)
                    .then(function (resp) {
                        app.$router.replace('/admin/players');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Unable to save the player");
                    });
            }
        }
    }
</script>