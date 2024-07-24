class PersianDate extends Date {
	constructor(...args) {
		super(...args);
	}

	toLocaleDateString = () => super.toLocaleDateString("fa-IR-u-nu");
	getParts = () => this.toLocaleDateString().split("/");
	getDay = () => (super.getDay() === 6 ? 0 : super.getDay() + 1);
	getDate = () => this.getParts()[2];
	getMonth = () => this.getParts()[1] - 1;
	getYear = () => this.getParts()[0];
	getMonthName = () => this.toLocaleDateString("fa-IR", { month: "long" });
	getDayName = () => this.toLocaleDateString("fa-IR", { weekday: "long" });
}
