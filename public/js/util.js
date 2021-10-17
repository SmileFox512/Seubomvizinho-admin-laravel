function toFormatedDate(str) {
    var date=new Date(str)
        const [month, day, year] = [date.getMonth(), date.getDate(), date.getFullYear()];
    var formatted = `${day.toString().padStart(2, '0')}/${month.toString().padStart(2, '0')}/${year}`
    return formatted
}