class Intern:
    def __init__(self, fn, ln, hngid, language, email):
        self.fn = fn
        self.ln = ln
        self.hngid = hngid
        self.language = language
        self.email = email


intern = Intern("Nnamdi", "Obiagwu", "HNG-03402",
                "Python", "obiagwu.nnamdi@yahoo.com")
print('Hello World, this is [{}] [{}] with HNGi7 ID [{}] using [{}] for stage 2 task. {}'.format(
    intern.fn, intern.ln, intern.hngid, intern.language, intern.email))
