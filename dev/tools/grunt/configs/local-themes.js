/**
 * grunt clean:prostik_luma_en_us && grunt exec:prostik_luma_en_us && grunt less:prostik_luma_en_us && grunt watch
 * grunt exec:prostik_luma_en_us && grunt less:prostik_luma_en_us && grunt watch
 * grunt exec:prostik_luma_uk_ua && grunt less:prostik_luma_uk_ua && grunt watch
 */

module.exports = {
    prostik_luma_uk_ua: {
        area: 'frontend',
        name: 'PRostik/luma',
        locale: 'uk_UA',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    prostik_luma_en_us: {
        area: 'frontend',
        name: 'PRostik/luma',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    }
};
