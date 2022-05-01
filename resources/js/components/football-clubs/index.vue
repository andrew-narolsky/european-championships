<template>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-white">
                    <div class="panel-body user-profile-panel">
                        <div class="card-header">
                            <h1 class="card-title mb-0"><strong>{{ football_club.name }}</strong></h1>
                        </div>
                        <div class="card-body text-center">
                            <img v-if="football_club.image" :src="football_club.image" alt="Christina Mason" class="img-fluid mb-2" width="auto" height="150">
                            <img v-if="!football_club.image" src="/backend/img/no_image.jpg" alt="Christina Mason" class="img-fluid mb-2" width="auto" height="150">
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <div class="h6 card-title flex-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag align-middle me-2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                                <span class="sub_title">Country: </span><span v-for="country in football_club.countries">{{ country }}</span>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <div class="h6 card-title flex-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield align-middle me-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                <span class="sub_title">Founded: </span>{{ football_club.founded }}
                            </div>
                        </div>
                        <hr class="my-0" v-if="football_club.destroyed">
                        <div class="card-body" v-if="football_club.destroyed">
                            <div class="h6 card-title flex-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield-off align-middle me-2"><path d="M19.69 14a6.9 6.9 0 0 0 .31-2V5l-8-3-3.16 1.18"></path><path d="M4.73 4.73L4 5v7c0 6 8 10 8 10a20.29 20.29 0 0 0 5.62-4.38"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                <span class="sub_title">Dissolved: </span>{{ football_club.destroyed }}
                            </div>
                        </div>
                        <hr class="my-0" v-if="football_club.old_names">
                        <div class="card-body" v-if="football_club.old_names">
                            <div class="h6 card-title flex-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list align-middle me-2"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span class="sub_title">Old names: </span>{{ football_club.old_names }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-white" v-if="football_club.notice">
                    <div class="panel-body user-profile-panel">
                        <div class="card-header">
                            <h5 class="card-title mb-0">About</h5>
                        </div>
                        <div class="card-body">
                            {{ football_club.notice }}
                        </div>
                    </div>
                </div>
                <div class="panel panel-white" v-for="award in awards">
                    <div class="card-header">
                        <h3 class="card-title mb-0 text-left">{{ award.name }}</h3>
                        <hr class="my-0">
                        <div class="card-body text-left" v-for="trophy in award.trophies">
                            <strong>{{ trophy.title }}({{ trophy.years.length }}):</strong>
                            <span v-for="(year, item) in trophy.years">{{ year }}<span v-if="item + 1 !== trophy.years.length">, </span></span>
                        </div>
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
        this.getFootballClub(slug);
    },
    data: () => ({
        football_club: {},
        awards: {},
    }),
    methods: {
        getFootballClub(slug) {
            axios.post('/api/football-clubs/' + slug, {
                key: '53V363XcSVOEsqRtHjxW'
            })
            .then(response => {
                this.football_club = response.data;
                this.awards = response.data.awards;
            })
            .catch(error => {
                console.log(error);
            });
        }
    }
}
</script>

<style scoped>
    .card-title.h6 {
        text-align: left;
    }
    .sub_title {
        padding-right: 10px;
        text-align: left;
    }
    .card-body.text-left {
        margin-top: 10px;
    }
</style>
