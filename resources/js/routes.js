export const routes = [
    // FRONTEND //

    // Home page
    {
        path: '/',
        name: 'home',
        component: () => import('./components/home')
    },

    // Countries
    {
        path: '/countries/:slug',
        name: 'country',
        component: () => import('./components/countries/index')
    },

    // Football Clubs
    {
        path: '/football-clubs/:id',
        name: 'football-club',
        component: () => import('./components/football-clubs/index')
    }
];
