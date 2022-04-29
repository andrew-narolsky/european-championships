<template>
    <div class="page-sidebar-menu">
        <ul class="accordion-menu">
            <li v-for="country in countries" :key="country.id">
                <router-link :to="{ name: 'country', params: { slug: country.slug } }">
                    <span>{{ country.name }}</span>
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    created() {
        this.getCountriesList();
    },
    data: () => ({
        countries: {},
    }),
    methods: {
        getCountriesList() {
            axios.post('/api/countries', {
                key: '53V363XcSVOEsqRtHjxW'
            })
            .then(response => {
                this.countries = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        },
    }
}
</script>
