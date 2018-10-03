<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createPlayer'}" class="btn btn-success">Create new player</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Players list</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Team</th>
                        <th width="150">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="player, index in players">
                        <td>{{ player.last_name }}</td>
                        <td>{{ player.first_name }}</td>
                        <td>{{ player.team.name }}</td>
                        <td>
                            <router-link :to="{name: 'editPlayer', params: {id: player.id}}" class="btn btn-xs btn-default">
                                Edit
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(player.id, index)">
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
                players: []
            }
        },
        mounted() {
            var app = this;
            axios.get('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/players')
                .then(function (resp) {
                    app.players = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Unable to load players.");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete this player?")) {
                    var app = this;
                    axios.delete('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/players/' + id)
                        .then(function (resp) {
                            app.players.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Unable to delete the player");
                        });
                }
            }
        }
    }
</script>