<template>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-white">
                    <div class="panel-body user-profile-panel">
                        <img v-if="country.flag" :src="country.flag" alt="Christina Mason" class="user-profile-image img-circle">
                        <img v-if="!country.flag" src="/backend/img/no_image.jpg" alt="Christina Mason" class="user-profile-image img-circle">
                        <h1 class="text-center m-t-lg">{{ country.name }}</h1>
                        <hr>
                        <div v-html="country.notice" class="text-left"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-white" v-for="competition in competitions">
                    <div class="panel-body user-profile-panel">
                        <h3 class="card-title mb-2">{{ competition.name }}</h3>
                        <hr>
                        <table class="table table-striped">
                            <thead v-if="competition.seasons">
                                <tr>
                                    <th style="width: 100px">Year</th>
                                    <th v-for="award in competition.awards">
                                        {{ award }}
                                    </th>
                                    <th v-if="competition.result">Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="season in competition.seasons" :key="season.id">
                                    <td>{{ season.year }}</td>
                                    <td v-for="winner in season.winners">
                                        <span v-for="(item, i) in winner">
                                            <router-link :to="{ name: 'football-club', params: { slug: item.slug } }">
                                                {{ item.name }}
                                            </router-link>
                                            <span v-if="i + 1 !== winner.length">|</span>
                                        </span>
                                    </td>
                                    <td v-if="competition.result">{{ season.result }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        let slug = this.$route.params.slug;
        this.getCountry(slug);
    },
    data: () => ({
        country: {},
        competitions: {},
    }),
    methods: {
        getCountry(slug) {
            axios.post('/api/countries/' + slug, {
                key: '53V363XcSVOEsqRtHjxW'
            })
            .then(response => {
                this.country = response.data;
                this.competitions = response.data.competitions;
            })
            .catch(error => {
                console.log(error);
            });
        },
    }
}
</script>
