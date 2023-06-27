function data() {
    return {
        dark: true,
        isSideMenuOpen: false,
        isNotificationsMenuOpen: false,
        isProfileMenuOpen: false,
        isPagesMenuOpen: false,
        // Modal
        isModalOpen: false,
        trapCleanup: null,
        openModal() {
            this.isModalOpen = true
            this.trapCleanup = focusTrap(document.querySelector('#modal'))
        },
        closeModal() {
            this.isModalOpen = false
            this.trapCleanup()
        },
    }
}
