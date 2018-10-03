<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createTeam'}" class="btn btn-success">Create new team</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Teams list</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th width="150">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="team, index in teams">
                        <td>
                            {{ team.name }}
                            <div v-if="team.players.length > 0">

                                <br />
                                <ul>
                                    <li v-for="player, index in team.players">
                                        {{ player.first_name }} {{ player.last_name }}
                                    </li>
                                </ul>

                            </div>
                        </td>
                        <td>
                            <router-link :to="{name: 'editTeam', params: {id: team.id}}" class="btn btn-xs btn-default">
                                Edit
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(team.id, index)">
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                teams: []
            }
        },
        mounted() {
            var app = this;
            axios.get('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/teams')
                .then(function (resp) {
                    app.teams = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Unable to load teams.");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete this team?")) {
                    var app = this;
                    axios.delete('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/teams/' + id)
                        .then(function (resp) {
                            app.teams.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Unable to delete the team");
                        });
                }
            }
        }
    }
</script>