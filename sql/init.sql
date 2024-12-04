USE Website;

CREATE TABLE IF NOT EXISTS users (
    login VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    PRIMARY KEY (login)
);

CREATE TABLE IF NOT EXISTS posts (
    post_id INT AUTO_INCREMENT NOT NULL,
    author_login VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (post_id),
    FOREIGN KEY (author_login) REFERENCES users(login) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS likes (
    like_id INT AUTO_INCREMENT NOT NULL,
    user_login VARCHAR(255) NOT NULL,
    post_id INT NOT NULL,
    liked_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (like_id),
    FOREIGN KEY (user_login) REFERENCES users(login) ON DELETE CASCADE,
    FOREIGN KEY (post_id) REFERENCES posts(post_id) ON DELETE CASCADE,
    UNIQUE (user_login, post_id)
);

CREATE TABLE IF NOT EXISTS sessions (
    token VARCHAR(255) NOT NULL,
    user_login VARCHAR(255) NOT NULL,
    expiration DATETIME NOT NULL,
    PRIMARY KEY (token),
    FOREIGN KEY (user_login) REFERENCES users(login) ON DELETE CASCADE
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    sujet TEXT NOT NULL
);

INSERT INTO services (titre, sujet) VALUES
('Analyse et manipulation de données', 'En utilisant des bibliothèques puissantes comme Pandas, NumPy et Matplotlib, nous créons des pipelines de données performants pour nettoyer, transformer et analyser des ensembles de données volumineux. Nous fournissons des visualisations claires et exploitables pour aider à la prise de décision et au reporting.'),
('Développement logiciel', 'Nous concevons des scripts Python afin d''automatiser des tâches répétitives ou complexes, comme la gestion de fichiers, l''envoi d''emails ou l''intégration de systèmes. L''objectif est de rendre les processus plus rapides et moins sujets à des erreurs humaines. Ces outils sont facilement configurables et adaptables aux besoins spécifiques des utilisateurs.'),
('Apprentissage automatique et IA', 'Nous modélisons des systèmes d''apprentissage automatique en utilisant des frameworks tels que TensorFlow, PyTorch, et Scikit-learn. Que ce soit pour des tâches de classification, régression ou analyse de séries temporelles, nous développons des modèles prédictifs avec des performances optimisées, en exploitant les dernières avancées en intelligence artificielle.'),
('Gestion de bases de données', 'Nous utilisons SQLAlchemy pour faciliter l’interaction avec des bases de données relationnelles, en simplifiant la gestion des schémas et des requêtes SQL. Nous construisons des systèmes qui permettent une gestion fluide et performante des données tout en assurant leur intégrité et leur accessibilité.'),
('Développement Web', 'Nous développons des applications Web robustes et performantes en utilisant des frameworks Python tels que Flask et Django. Cela inclut la création de sites Web dynamiques, ainsi que des API RESTful pour des interactions efficaces avec des bases de données ou des systèmes externes. Notre objectif est de livrer des applications rapides, scalables et sécurisées.'),
('Programmation orientée objet (POO)', 'Nous appliquons les principes de la POO pour concevoir des solutions modulaires et réutilisables. L’utilisation des concepts de classes, héritage, polymorphisme et encapsulation nous permet de créer des architectures logicielles robustes et évolutives, adaptées à des projets de grande envergure.'),
('Scripts pour la cybersécurité', 'Nous développons des scripts pour analyser des fichiers ou pour effectuer des simulations d''attaques dans le cadre de tests de sécurité. Ces outils sont utilisés pour automatiser des tâches de surveillance, de détection d''anomalies ou d''audit de systèmes, contribuant ainsi à renforcer la sécurité des infrastructures.'),
('Applications scientifiques', 'Nous mettons en œuvre des solutions Python dans des domaines scientifiques, en utilisant des bibliothèques comme SciPy, SymPy, ou Matplotlib. Cela inclut des applications pour la modélisation numérique, la simulation de phénomènes physiques, et le traitement des données expérimentales, afin d''aider à la recherche et à l''innovation.'),
('Développement d’applications complexes : logiciels d’entreprise et systèmes distribués (JEE, Spring)', 'Notre expertise repose sur la conception et le développement d’applications d’entreprise complexes en utilisant des technologies modernes telles que Java EE et Spring. Nous avons une solide expérience dans la création de systèmes distribués, permettant à des applications de fonctionner de manière transparente à travers des réseaux d’entreprises. Grâce à des pratiques de développement orientées services, nous assurons l’intégration et la scalabilité des solutions.'),
('Programmation orientée objet avancée : gestion des interfaces, héritage, polymorphisme et encapsulation', 'Nous mettons en œuvre les principes fondamentaux de la programmation orientée objet (POO) avec un focus particulier sur les concepts avancés. La gestion des interfaces, l’héritage, le polymorphisme et l’encapsulation sont des éléments clés de nos développements, permettant d’écrire du code modulaire, flexible et facile à maintenir. Cette approche garantit une architecture évolutive et réutilisable.'),
('Développement mobile Android : Création d’applications avec Android SDK', 'En tant que développeurs Android expérimentés, nous créons des applications mobiles de haute qualité en utilisant le SDK Android. Nous exploitons toutes les capacités de la plateforme pour concevoir des expériences utilisateurs fluides et intuitives, tout en optimisant les performances pour garantir une expérience optimale sur tous les appareils Android.'),
('Développement de services Web : API RESTful avec des frameworks comme Spring Boot', 'Nous développons des services Web performants en utilisant Spring Boot pour concevoir des API RESTful efficaces. Grâce à une architecture légère et évolutive, nos services Web sont capables de gérer des volumes de requêtes importants tout en maintenant une grande simplicité d’intégration et d’utilisation pour les clients.'),
('Gestion de mémoire et optimisation : Utilisation efficace du garbage collector et des threads', 'La gestion de la mémoire est essentielle dans le développement de logiciels Java. Nous optimisons l’utilisation du garbage collector et gérons les threads de manière efficace pour éviter les fuites de mémoire et garantir des performances maximales, même pour des applications à fort trafic.'),
('Utilisation de bases de données : connexion et manipulation via JDBC ou Hibernate', 'Nous intégrons des bases de données relationnelles dans nos applications Java en utilisant des technologies telles que JDBC et Hibernate. Grâce à ces outils, nous assurons une gestion optimale des données et une interaction fluide avec les systèmes de gestion de bases de données, en garantissant la cohérence et la performance des transactions.'),
('Sécurisation des applications : gestion des sessions, des authentifications et des autorisations', 'La sécurité est une priorité dans tous nos projets. Nous mettons en place des mécanismes de gestion des sessions, d’authentification et d’autorisation robustes pour protéger les données des utilisateurs et garantir l''intégrité des applications. Cela inclut des techniques comme le chiffrement des données sensibles et l’utilisation d’outils comme Spring Security pour protéger les applications contre les attaques.'),
('Applications multiplateformes : portabilité grâce au principe « Write Once, Run Anywhere »', 'Nous nous engageons à créer des applications multiplateformes en suivant le principe « Write Once, Run Anywhere ». Grâce à Java, qui permet une exécution homogène sur différentes plateformes, nous assurons la portabilité des solutions que nous développons, permettant à nos applications de fonctionner de manière transparente sur des environnements variés.'),
('Développement front-end : création d’interfaces utilisateur dynamiques avec React, Angular ou Vue.js', 'Nous sommes experts dans le développement d’interfaces utilisateur modernes et interactives grâce à des frameworks populaires tels que React, Angular et Vue.js. Ces technologies nous permettent de construire des interfaces fluides et réactives, en assurant une expérience utilisateur optimale sur tous les types d''appareils.'),
('Programmation asynchrone : gestion des promesses, Async/Await, et manipulation d’API REST', 'La gestion de la programmation asynchrone est essentielle pour offrir des applications réactives et performantes. Nous utilisons des techniques telles que les promesses, Async/Await, et la manipulation d’API REST pour garantir des interactions fluides avec les serveurs, tout en optimisant les performances de nos applications.'),
('Développement Backend : création de serveurs et d’API avec Node.js et Express.js', 'Notre équipe crée des serveurs et des API puissants et scalables avec Node.js et Express.js. Grâce à la nature non bloquante de Node.js, nous construisons des applications backend performantes capables de gérer des milliers de requêtes simultanées tout en offrant une grande flexibilité.'),
('Manipulation du DOM : dynamisation et personnalisation de pages HTML/CSS', 'Nous mettons à profit nos compétences en manipulation du DOM pour dynamiser des pages HTML et CSS, rendant ainsi les pages web interactives et personnalisées. Cette approche permet d''améliorer l''engagement utilisateur et de créer des expériences web plus intuitives et interactives.'),
('Frameworks modernes : maîtrise de bibliothèques populaires comme jQuery ou Svelte', 'En plus des frameworks populaires comme React, Vue et Angular, nous maîtrisons également des bibliothèques comme jQuery pour une manipulation efficace du DOM et Svelte pour créer des applications ultra-rapides et légères. Ces outils nous permettent d’écrire du code concis et performant pour des interfaces réactives.'),
('Applications temps réel : Utilisation de WebSockets et de Frameworks comme Socket.IO', 'Nous développons des applications en temps réel en utilisant des technologies comme WebSockets et des frameworks comme Socket.IO. Ces solutions permettent à nos applications de recevoir des données en temps réel, telles que des mises à jour de chat, des notifications ou des flux de données, garantissant une expérience utilisateur fluide et instantanée.'),
('Tests unitaires et E2E : Utilisation d’outils comme Jest, Mocha ou Cypress', 'La qualité et la stabilité du code sont au cœur de nos préoccupations. Nous utilisons des outils de tests comme Jest, Mocha et Cypress pour effectuer des tests unitaires et de bout en bout (E2E). Cela nous permet de valider le bon fonctionnement de nos applications et de nous assurer qu’elles répondent aux attentes des utilisateurs sans régression.'),
('Applications multiplateformes : développement mobile avec React Native et Electron pour des apps desktop', 'Nous nous spécialisons dans le développement d’applications multiplateformes, en utilisant des technologies comme React Native pour les applications mobiles et Electron pour les applications de bureau. Ces outils permettent de créer des applications natives qui fonctionnent sur plusieurs plateformes, offrant ainsi une expérience utilisateur cohérente.'),
('Optimisation des performances : gestion du rendu et du temps de réponse avec des outils comme Lighthouse', 'Nous analysons et optimisons les performances de nos applications web en utilisant des outils comme Lighthouse. Nous nous assurons que nos applications se chargent rapidement et offrent une expérience fluide, tout en surveillant les éléments qui pourraient affecter la vitesse ou l’interactivité du site.'),
('Gestion des erreurs : mise en place de systèmes de monitoring et d’alertes avec des outils comme Sentry', 'Nous mettons en place des systèmes de monitoring des erreurs dans nos applications, en utilisant des outils comme Sentry pour suivre et gérer les erreurs en temps réel. Ces systèmes permettent de repérer les problèmes rapidement et d’y remédier avant qu’ils n’affectent l’expérience utilisateur.'),
('Continous Integration (CI) et Continous Delivery (CD) : mise en place de pipelines automatisés', 'Nous adoptons des pratiques de développement moderne avec l’intégration continue (CI) et la livraison continue (CD). Cela nous permet de livrer du code de manière rapide et fiable, en automatisant les tests et les déploiements grâce à des outils comme Jenkins, GitLab CI ou GitHub Actions.'),
('Containerisation : gestion des environnements avec Docker et Kubernetes', 'Nous utilisons des technologies de containerisation comme Docker et Kubernetes pour faciliter le déploiement et la gestion d’applications dans des environnements cloud. Ces outils permettent d’assurer la portabilité et la scalabilité des solutions que nous développons, tout en garantissant un contrôle précis des ressources et de l''infrastructure.'),
('Gestion de la configuration : utilisation d’outils comme Ansible et Terraform', 'Nous gérons la configuration de nos infrastructures à l’aide d’outils comme Ansible et Terraform. Ces outils permettent de gérer automatiquement l’état de nos systèmes et d’assurer une gestion cohérente et fiable des configurations sur des infrastructures complexes.'),
('Gestion des API : documentation et test avec des outils comme Swagger ou Postman', 'Nous utilisons des outils comme Swagger ou Postman pour la documentation et le test des API que nous développons. Ces outils facilitent la création de spécifications claires et permettent une vérification rapide de l’interopérabilité des API avec d’autres systèmes.'),
('Sécurisation des API : utilisation de mécanismes comme OAuth2, JWT et HTTPS', 'Nous sécurisons les API que nous développons en utilisant des mécanismes comme OAuth2, JWT et HTTPS. Ces techniques garantissent que seules les personnes et les systèmes autorisés peuvent accéder aux données sensibles, tout en assurant une communication sécurisée entre les clients et les serveurs.');
;
